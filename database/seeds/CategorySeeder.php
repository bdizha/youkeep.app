<?php

use App\CategoryProduct;
use App\StoreCategory;
use Illuminate\Database\Seeder;
use App\Category;
use App\Store;

class CategorySeeder extends DatabaseSeeder
{
    protected $storeId = 24; // Shopple store
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
        $this->level = 0;
        $this->fetchCategories();

        die("fetchCategories >>> done");
    }

    private function fetchCategories()
    {
        $link = url("/api/home/categories");

        $categoryNode = Goutte::request('GET', $link);
        $categoryNodes = $categoryNode->filter('.menu__items .menu-item__title');

        $categoryNodes->each(function ($node) {
            echo __LINE__ . " <> \n";
            $categoryName = $node->text();
            echo __LINE__ . " <> \n";

            $categoryName = ucwords(strtolower($categoryName));
            $this->category = $this->setCategory($categoryName, null);

            echo "Category slug: {$this->category->slug}\n";

            $this->linkCategories();
        });
    }

    public function linkCategories()
    {
        $categoryName = $this->category->slug;
        $categoryParts = explode("-", $categoryName);

        $categoryIds = [];

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
                            $query->where('level', '=', 0);
                        });

                        $parentCategory = $parentCategory->first();

                        if (empty($parentCategory)) {
                            continue;
                        }

                        $parentStoreCategory = StoreCategory::where('category_id', $parentCategory->id)
                            ->where('level', 0);

                        $this->parentStoreCategory = $parentStoreCategory->first();

                        if (empty($this->parentStoreCategory)) {
                            continue;
                        }

                        $query = Category::with('stores')
                            ->where('slug', 'like', $mappedKey);

                        $query->whereHas('stores', function ($query) {
                            $query->where('level', '=', 1)
                                ->where('store_id', 71);
                        });

                        $categories = $query->get();

                        foreach ($categories as $category) {
                            $storeCategory = StoreCategory::where('category_id', $category->id)
                                ->where('level', 1);

                            $storeCategory = $storeCategory->first();

                            // Find the child categories that should be linked
                            if (!empty($storeCategory)) {
                                $childStoreCategories = StoreCategory::where('parent_id', $storeCategory->id)->with('category');
                                $this->childStoreCategories = $childStoreCategories->get();

                                foreach ($this->childStoreCategories as $key => $childStoreCategory) {

                                    if ($key == 0) {
                                        $this->parentStoreCategory->has_categories = true;
                                        $this->parentStoreCategory->has_products = true;
                                        $this->parentStoreCategory->save();
                                    }

                                    echo "Inserting category mapping {$mappedName} => {$mappedKey} => {$childStoreCategory->category->name}\n";

                                    $categoryIds[] = $childStoreCategory->category_id;

                                    $attributes = [
                                        'category_id' => $childStoreCategory->category_id,
                                        'level' => 1,
                                        'store_id' => 24
                                    ];

                                    $values = [
                                        'parent_id' => $this->parentStoreCategory->id
                                    ];

                                    // save store categories
                                    StoreCategory::updateOrCreate($attributes, $values);
                                }
                            }
                        }

                        if($categoryName == 'for-men'){
//                            dd([$this->parentStoreCategory]);
                        }
                    }
                }
            }

            $this->setCategoryProducts($categoryIds);
        }
    }

    public function setCategoryProducts($categoryIds)
    {
        $categoryProducts = CategoryProduct::whereIn('category_id', $categoryIds)
            ->get();

        foreach ($categoryProducts as $categoryProduct) {
            $attributes = [
                'category_id' => $this->category->id,
                'product_id' => $categoryProduct->product_id
            ];

            $values = [
                'category_id' => $this->category->id,
                'product_id' => $categoryProduct->product_id
            ];

            \App\CategoryProduct::updateOrCreate($attributes, $values);
        }
    }
}
