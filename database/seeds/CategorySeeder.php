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

            $this->linkCategories();
        });
    }

    protected $mappedNames = [
        'furniture' => 'household-items',
        'bed-bath' => 'household-items',
        'kids' => 'for-kids',
        'kitchen' => 'household-items',
        'accessories' => 'accessories',
        'appliances-tech' => 'electronics',
        'audio' => 'electronics',
        'shop-by-brand' => 'fashion',
        'dining' => 'household-items',
        'decor' => 'household-items',
        'exclusive-to-online' => 'premium',
        'offers' => 'promos',
        'sale' => 'fashion',
        'promos' => 'promos',
        'what-s-new' => ['premium','household-items'],
        'ladies' => 'for-women',
        'fashion' => 'fashion',
        'clothes' => 'fashion',
        'clothing' => 'fashion',
        'shoes' => 'fashion',
        'mens' => ['for-men', 'fashion'],
        'new-in' => ['premium','household-items'],
        'baby' => 'for-kids',
        'schoolgear' => 'for-kids',
        'girls' => 'for-kids',
        'boys' => 'for-kids',
        'beauty' => 'beauty-personal-care',
        'skincare' => 'beauty-personal-care',
        'mrp-co' => 'household-items',
        'inspo' => 'household-items',
        'cellular' => 'electronics',
        'gift-registry' => 'books-gifts',
        'add-gifts' => 'books-gifts',
        'bags-accessories' => ['premium','fashion'],
        'jeans' => 'fashion',
        'brands' => 'household-items',
        'locally-made' => 'household-items',
        'tech' => 'electronics',
        'cellphones' => ['just-for-you', 'electronics'],
        'laptops-tablets' => ['just-for-you', 'electronics'],
        'tv-home' => 'electronics',
        'makeup' => 'beauty-personal-care',
        'men' => 'for-men',
        'hair' => 'beauty-personal-care',
        'hot-deals' => 'household-items',
        'e-gift-cards-1' => 'books-gifts',
        '50-off' => 'art-crafts',
        'women' => 'for-women',
        'fan-gear' => 'fashion',
        'equipment' => 'household-items',
        'gaming' => 'electronics',
        'team-sports-catalogue' => 'sports',
        'lingerie' => 'for-women',
        'footwear' => ['shoes', 'fashion'],
        'denim' => ['just-for-you', 'fashion'],
        'new-arrivals' => ['accessories', 'fashion'],
        'specials' => 'household-items',
        'tech-accessories' => 'electronics',
        'shop-the-look' => 'fashion',
        'suit-shop' => 'fashion',
        'sale-offers' => 'promos',
        'fragrance' => 'beauty-personal-care',
        'exclusives' => 'exclusives',
        'shop-local' => 'fashion',
        'how-to' => 'household-items',
        'soda-bloc' => 'just-for-you',
        'blog' => 'household-items',
        'release-calendar' => 'household-items',
        'exactcares' => 'household-items',
        'fashion' => ['just-for-you', 'fashion'],
        'new' => ['just-for-you', 'fashion'],
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
                if (in_array($categoryName, is_array($mappedName) ? $mappedName : [$mappedName])) {
                    $query = Category::with('stores')
                        ->where('slug', 'like', $mappedKey);

                    $query->whereHas('stores', function ($query) {
                        $query->where('level', '=', 1);
                    });

                    $categories = $query->get();

                    foreach ($categories as $category) {
                        $categoryIds[] = $category->id;

                        $attributes = [
                            'category_id' => $category->id,
                            'level' => 1,
                        ];

                        $values = [
                            'parent_id' => $this->storeCategory->id
                        ];

                        // save store categories
                        StoreCategory::updateOrCreate($attributes, $values);
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
