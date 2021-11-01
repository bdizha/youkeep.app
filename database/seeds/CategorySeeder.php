<?php

use App\CategoryProduct;
use App\StoreCategory;
use Illuminate\Database\Seeder;
use App\Category;
use App\AppCategory;
use Illuminate\Support\Str;

class CategorySeeder extends DatabaseSeeder
{
    protected $domain = 'https://www.opensea.io';
    protected $storeCategories = [4784, 4788, 4789];
    protected $mappedNames = [
        'furniture' => 'household-items',
        'bed-bath' => 'household-items',
        'kitchen' => 'household-items',
        'accessories' => 'accessories',
        'appliances-tech' => 'electronics',
        'audio' => 'electronics',
        'shop-by-brand' => 'clothing',
        'dining' => 'household-items',
        'decor' => 'household-items',
        'exclusive-to-online' => 'just-for-you',
        'offers' => 'promos',
        'sale' => 'clothing',
        'promos' => 'promos',
        'what-s-new' => ['just-for-you', 'household-items'],
        'ladies' => ['for-women', 'clothing'],
        'for-ladies' => ['for-women', 'clothing'],
        'clothes' => 'clothing',
        'clothing' => ['just-for-you', 'clothing'],
        '3stripes' => 'clothing',
        'outlet' => ['clothing', 'sport-outdoors'],
        'brands' => ['clothing', 'sport-outdoors'],
        'shoes' => ['shoes', 'clothing'],
        'men' => ['for-men', 'clothing'],
        'for-men' => ['for-men', 'clothing'],
        'new-in' => ['just-for-you', 'household-items'],
        'baby' => 'for-baby',
        'kids' => ['for-boys', 'for-girls'],
        'for-kids' => ['for-boys', 'for-girls'],
        'schoolgear' => ['for-boys', 'for-girls'],
        'girls' => ['for-girls', 'clothing'],
        'boys' => ['for-boys', 'clothing'],
        'beauty' => 'beauty-personal-care',
        'skincare' => 'beauty-personal-care',
        'mrp-co' => 'household-items',
        'inspo' => 'household-items',
        'cellular' => 'electronics',
        'gift-registry' => 'books-gifts',
        'add-gifts' => 'books-gifts',
        'bags-accessories' => ['just-for-you', 'clothing'],
        'jeans' => 'clothing',
        'locally-made' => 'household-items',
        'tech' => 'electronics',
        'cellphones' => ['just-for-you', 'electronics'],
        'laptops-tablets' => ['just-for-you', 'electronics'],
        'tv-home' => 'electronics',
        'makeup' => 'beauty-personal-care',
        'hair' => 'beauty-personal-care',
        'hot-deals' => 'household-items',
        'e-gift-cards-1' => 'books-gifts',
        '50-off' => 'art-crafts',
        'women' => ['for-women', 'clothing'],
        'fan-gear' => 'clothing',
        'equipment' => 'household-items',
        'gaming' => 'electronics',
        'team-sports-catalogue' => 'sports',
        'lingerie' => ['for-women', 'clothing'],
        'footwear' => ['shoes', 'clothing'],
        'denim' => ['just-for-you', 'clothing'],
        'new-arrivals' => ['accessories', 'clothing'],
        'specials' => 'household-items',
        'tech-accessories' => 'electronics',
        'shop-the-look' => 'clothing',
        'suit-shop' => 'clothing',
        'sale-offers' => 'promos',
        'fragrance' => 'beauty-personal-care',
        'exclusives' => 'just-for-you',
        'shop-local' => 'clothing',
        'how-to' => 'household-items',
        'soda-bloc' => 'just-for-you',
        'blog' => 'household-items',
        'release-calendar' => 'household-items',
        'exactcares' => 'household-items',
        'new' => ['just-for-you', 'clothing'],
        'painting' => 'art-crafts',
        'printmaking' => 'art-crafts',
        'photography' => 'art-crafts',
        'sculpture' => ['household-items', 'art-crafts'],
        'drawing' => 'art-crafts',
        'digital-art' => 'art-crafts',
        'collage' => ['household-items', 'art-crafts'],
        'new-art' => ['household-items', 'art-crafts'],
        'all-art' => 'household-items',
        'landscapes' => ['household-items', 'art-crafts'],
        'abstracts' => ['household-items', 'art-crafts'],
        'people-and-portraits' => ['household-items', 'art-crafts'],
        'nudes' => ['household-items', 'art-crafts'],
        'florals-and-plants' => ['household-items', 'art-crafts'],
        'still-life' => ['household-items', 'art-crafts'],
        'animals' => ['household-items', 'art-crafts'],
        'architecture-and-cities' => ['household-items', 'art-crafts'],
        '100-and-under' => ['household-items', 'art-crafts'],
        '500-and-under' => ['household-items', 'art-crafts'],
        '1-000-and-under' => 'art-crafts',
        '1-000-and-over' => 'art-crafts',
        '20-off' => 'household-items',
        '30-off' => ['just-for-you', 'household-items', 'art-crafts'],
        'all-sale' => ['just-for-you', 'household-items'],
        'free-shipping' => ['household-items', 'art-crafts'],
        'be-inspired' => 'household-items'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $this->fetchCategories();

        die("fetchCategories >>> done");
    }

    private function fetchCategories()
    {
        $link = url("/api/home/categories");

        $categoryNode = Goutte::request('GET', $link);
        $categoryNodes = $categoryNode->filter('.QbTKh');

        $categoryNodes->each(function ($node) {
            echo __LINE__ . " <> \n";

            if($node->filter('.kCOfJW')->count()){
                $categoryName = $node->filter('.kCOfJW')->text();
                echo __LINE__ . " <> \n";

                $categoryName = Str::slug($categoryName, " ");
                $categoryName = ucwords(strtolower($categoryName));

                $photoUrl = $this->domain . $node->filter('img')->attr('src');

                $this->categoryPhoto = $this->getSha1File('category', $photoUrl);

                $this->setCategory($categoryName, null, Category::TYPE_STORE, false);
            }
        });
    }

    public function linkCategories()
    {
        $categoryName = $this->category->slug;
        $categoryParts = explode("-", $categoryName);

        $ignoredWords = ['for'];
        foreach ($categoryParts as $categoryPart) {
            if (in_array($categoryPart, $ignoredWords)) {
                continue;
            }

            foreach ($this->mappedNames as $mappedKey => $mappedName) {
                $mappedNames = is_array($mappedName) ? $mappedName : [$mappedName];

                if (in_array($categoryName, $mappedNames)) {

                    foreach ($mappedNames as $mappedName) {
                        $parentCategory = Category::with('stores')
                            ->where('slug', 'like', $mappedName);

                        $parentCategory->whereHas('stores', function ($query) {
                            $query->where('level', '=', 1);
                        });

                        $parentCategory = $parentCategory->first();
                        echo "Mapped category {$mappedName} vs {$mappedKey}\n";

                        if (empty($parentCategory)) {
                            echo "Parent category not found {$mappedName}\n";

                            continue;
                        }

                        $this->parentStoreCategory = StoreCategory::where('category_id', $parentCategory->id)
                            ->where('level', 1)
                            ->first();

                        if (empty($this->parentStoreCategory)) {
                            echo "Parent category not found {$mappedName}\n";
                            continue;
                        }

                        $mappedCategoryQuery = Category::with('stores')
                            ->where('slug', 'like', $mappedKey);

                        $mappedCategoryQuery->whereHas('stores', function ($query) {
                            $query->where('level', '=', 1)
                                ->where('store_id', 71);
                        });

                        $mappedCategories = $mappedCategoryQuery->get();

                        echo "Mapped category >>>>>> {$mappedCategories->count()}\n";

//                        dd([$mappedCategories, $mappedKey]);

                        foreach ($mappedCategories as $parentCategory) {

                            echo "Found child category {$parentCategory->slug}\n";

                            // Get the level 1
                            $fromStoreCategory = StoreCategory::where('category_id', $parentCategory->id)
                                ->where('level', 1)->first();

                            // Find the child categories recursively that should be linked to the global category
                            // Level 1
                            if (!empty($fromStoreCategory)) {
                                $this->_setMappedCategories($fromStoreCategory, $this->parentStoreCategory, 2, $mappedKey);
                            }
                        }
                    }
                }
            }

//            dd([$this->parentStoreCategory->category]);
        }
    }

    public function setCategoryProducts($fromStoreCategory, $toStoreCategory)
    {
        $categoryProducts = CategoryProduct::where('category_id', $fromStoreCategory->id)
            ->get();

        foreach ($categoryProducts as $categoryProduct) {
            $this->_setCategoryProduct($toStoreCategory, $categoryProduct);
            $this->_setCategoryProduct($this->parentStoreCategory, $categoryProduct);
        }
    }

    /**
     * @param $storeCategory
     * @param array|object $parentStoreCategory
     * @param integer $level
     * @param string $mappedKey
     * @return void
     */
    protected function _setMappedCategories($fromStoreCategory = null, $parentStoreCategory = null, $level = 1, string $mappedKey): void
    {
        // Here for example: adidas -> women -> get child categories like featured, clothing, accessories, shoes, etc

        // Adidas -> Women -> Featured <=> Global -> For Women -> Featured
        $fromChildStoreCategories = StoreCategory::where('parent_id', $fromStoreCategory->id)
            ->with(['category', 'categories']);

        foreach ($fromChildStoreCategories->get() as $key => $childStoreCategory) {
            if ($key == 0) {
                $this->parentStoreCategory->has_categories = true;
                $this->parentStoreCategory->has_products = true;
                $this->parentStoreCategory->save();
            }

            echo "Inserting category mapping {$parentStoreCategory->category->slug} => {$mappedKey} => {$childStoreCategory->category->name}\n";

            $attributes = [
                'parent_id' => $parentStoreCategory->id,
                'category_id' => $childStoreCategory->category_id,
                'level' => $level,
                'store_id' => 24
            ];

            $values = [
                'parent_id' => $parentStoreCategory->id,
                'category_id' => $childStoreCategory->category_id,
                'level' => $level,
                'store_id' => 24
            ];

            // save store categories
            $toStoreCategory = StoreCategory::updateOrCreate($attributes, $values);

            $this->setCategoryProducts($childStoreCategory, $toStoreCategory);

            if(!empty($childStoreCategory->categories)){
                $this->_setMappedCategories($childStoreCategory, $toStoreCategory, $level + 1, $mappedKey);
            }
        }
    }

    /**
     * @param $toStoreCategory
     * @param $categoryProduct
     */
    protected function _setCategoryProduct($toStoreCategory, $categoryProduct): void
    {
        $attributes = [
            'category_id' => $toStoreCategory->id,
            'product_id' => $categoryProduct->product_id
        ];

        $values = [
            'category_id' => $toStoreCategory->id,
            'product_id' => $categoryProduct->product_id
        ];

        \App\CategoryProduct::updateOrCreate($attributes, $values);
    }
}
