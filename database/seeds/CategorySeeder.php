<?php

use App\CategoryProduct;
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
        'furniture' => 'house-hold-items',
        'bed-bath' => 'house-hold-items',
        'kids' => 'for-children',
        'kitchen' => 'house-hold-items',
        'accessories' => 'accessories',
        'appliances-tech' => 'electronics',
        'audio' => 'electronics',
        'shop-by-brand' => 'clothes',
        'dining' => 'house-hold-items',
        'decor' => 'house-hold-items',
        'exclusive-to-online' => 'premium',
        'offers' => 'promos',
        'sale' => 'clothing',
        'promos' => 'promos',
        'what-s-new' => ['premium','house-hold-items'],
        'ladies' => 'for-women',
        'clothing' => 'clothing',
        'shoes' => 'clothing',
        'mens' => 'for-men',
        'new-in' => ['premium','house-hold-items'],
        'baby' => 'for-children',
        'schoolgear' => 'for-children',
        'girls' => 'for-children',
        'boys' => 'for-children',
        'beauty' => 'beauty',
        'skincare' => 'beauty',
        'mrp-co' => 'house-hold-items',
        'inspo' => 'house-hold-items',
        'cellular' => 'electronics',
        'gift-registry' => 'gifts',
        'add-gifts' => 'gifts',
        'bags-accessories' => ['premium','clothing'],
        'jeans' => 'clothing',
        'brands' => 'house-hold-items',
        'locally-made' => 'house-hold-items',
        'tech' => 'electronics',
        'cellphones' => ['just-for-you', 'electronics'],
        'laptops-tablets' => ['just-for-you', 'electronics'],
        'tv-home' => 'electronics',
        'makeup' => 'beauty',
        'men' => 'for-men',
        'hair' => 'beauty',
        'hot-deals' => 'house-hold-items',
        'e-gift-cards-1' => 'gifts',
        '50-off' => 'art',
        'women' => 'for-women',
        'fan-gear' => 'clothing',
        'equipment' => 'house-hold-items',
        'gaming' => 'electronics',
        'team-sports-catalogue' => 'sports',
        'lingerie' => 'for-women',
        'footwear' => 'shoes',
        'denim' => ['just-for-you', 'clothing'],
        'new-arrivals' => 'accessories',
        'specials' => 'house-hold-items',
        'tech-accessories' => 'electronics',
        'shop-the-look' => 'clothing',
        'suit-shop' => 'clothing',
        'sale-offers' => 'promos',
        'fragrance' => 'beauty',
        'exclusives' => 'exclusives',
        'shop-local' => 'clothing',
        'how-to' => 'house-hold-items',
        'soda-bloc' => 'just-for-you',
        'blog' => 'house-hold-items',
        'release-calendar' => 'house-hold-items',
        'exactcares' => 'house-hold-items',
        'fashion' => ['just-for-you', 'clothing'],
        'new' => ['just-for-you', 'clothing'],
        'painting' => 'art',
        'printmaking' => 'art',
        'photography' => 'art',
        'sculpture' => ['house-hold-items', 'art'],
        'drawing' => 'art',
        'digital-art' => 'art',
        'collage' => ['house-hold-items', 'art'],
        'new-art' => ['house-hold-items', 'art'],
        'all-art' => 'house-hold-items',
        'landscapes' => ['house-hold-items', 'art'],
        'abstracts' => ['house-hold-items', 'art'],
        'people-and-portraits' => ['house-hold-items', 'art'],
        'nudes' => ['house-hold-items', 'art'],
        'florals-and-plants' => ['house-hold-items', 'art'],
        'still-life' => ['house-hold-items', 'art'],
        'animals' => ['house-hold-items', 'art'],
        'architecture-and-cities' => ['house-hold-items', 'art'],
        '100-and-under' => ['house-hold-items', 'art'],
        '500-and-under' => ['house-hold-items', 'art'],
        '1-000-and-under' => 'art',
        '1-000-and-over' => 'art',
        '20-off' => 'house-hold-items',
        '30-off' => ['just-for-you', 'house-hold-items', 'art'],
        'all-sale' => ['just-for-you', 'house-hold-items'],
        'free-shipping' => ['house-hold-items', 'art'],
        'be-inspired' => 'house-hold-items'
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
                            'parent_id' => $this->category->id
                        ];

                        // save store categories
                        $storeCategory = \App\StoreCategory::updateOrCreate($attributes, $values);
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
