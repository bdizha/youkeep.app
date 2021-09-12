<?php

use App\ArticleCategory;
use App\CategoryArticle;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    protected $domain = 'https://www.getbalance.com';
    protected $app = null;
    protected $articleType = null;
    protected $helpDomain = 'https://help.rangeme.com';


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();
//        $this->_setHelp();
        $this->_setBlog();

        $this->_updateCategories();
    }

    protected function _setApp(): void
    {
        $appName = env('APP_NAME');
        $appUrl = env('APP_DOMAIN');
        $slogan = env('APP_SLOGAN');

        $attributes = [
            'name' => $appName,
            'url' => $appUrl,
        ];

        $values = [
            'name' => $appName,
            'url' => $appUrl,
            'description' => $slogan
        ];

        $this->app = \App\App::updateOrCreate($attributes, $values);
    }

    private function _setHelp()
    {
        // $crawler = Goutte::request('GET', $this->helpDomain);

        $crawler = Goutte::request('GET', 'http://api.shopple.local/feed');

        $crawler->filter('.blocks-list .blocks-item')->each(function ($node) {
            $categoryTypeUrl = $this->helpDomain . $node->filter('.blocks-item-link')->attr('href');
            $this->_setCategory($categoryTypeUrl);
        });
    }

    private function _setCategory($categoryTypeUrl)
    {
        $encodedUrl = $this->_setCrawler($categoryTypeUrl);
        $crawler = Goutte::request('GET', $encodedUrl);

        // fetch categories
        $crawler->filter('.section a')->each(function ($node) {

            $categoryUrl = $this->helpDomain . $node->attr('href');

            $encodedUrl = $this->_setCrawler($categoryUrl);
            $crawler = Goutte::request('GET', $encodedUrl);

            // fetch articles
            $crawler->filter('a.blog-list-link')->each(function ($node) {
                $articleUrl = $this->helpDomain . $node->attr('href');
                $this->_setArticle($articleUrl);
            });
        });
    }

    /**
     * @param string $url
     * @return string
     */
    protected function _setCrawler(string $url): string
    {
        $encodedUrl = urlencode($url);
        return "https://api.proxycrawl.com/?token=XedJD-fi9KMpxSZfh_U2JA&url={$encodedUrl}";
    }

    private function _setArticle($articleUrl)
    {
        try {
            $encodedUrl = $this->_setCrawler($articleUrl);

            $crawler = Goutte::request('GET', $encodedUrl);

            $articleCategories = [];
            $articleNode = $crawler->filter('.blog');

            $crawler->filter('.breadcrumbs li')->each(function ($node) use (&$articleCategories) {
                $name = $node->text();
                $name = str_replace("RangeMe", 'Addtract', trim($name));;
                $articleCategories[] = $name;
            });

            array_shift($articleCategories);

            $articleCategoryId = null;
            foreach ($articleCategories as $categoryName) {
                $attributes = [
                    'name' => $categoryName
                ];

                $values = [
                    'name' => $categoryName,
                    'article_category_id' => $articleCategoryId
                ];

                $articleCategory = \App\ArticleCategory::updateOrCreate($attributes, $values);
                $articleCategoryId = $articleCategory->id;
            }

            $title = $articleNode->filter('.blog-title')->text();
            $blurb = $articleNode->filter('.blog-body p')->eq(0)->text();
            $content = $articleNode->filter('.blog-body')->html();

            $attributes = [
                'title' => $title,
                'blurb' => $blurb,
            ];

            $values = [
                'title' => trim($title),
                'blurb' => trim($blurb),
                'content' => $content,
                'app_id' => $this->app->id,
                'article_category_id' => $articleCategoryId
            ];

            $article = \App\Article::updateOrCreate($attributes, $values);

            echo ">>>>> Created blog resource: " . $article->title . " :::\n";
        } catch (Exception $e) {
            echo ">>>>> Error occurred on blog create: " . $e->getMessage() . " :::\n";
        }
    }

    private function _setBlog()
    {
        $crawler = Goutte::request('GET', $this->domain . '/blog');
        $crawler->filter('.w-dyn-list .bp-item')->each(function ($node) {

            $title = $node->filter('.bp-title')->text();
            $blurb = $node->filter('.bp-summary')->text();

            $categories = [];
            $node->filter('.cl-blog-tag')->each(function ($node) use (&$categories) {
                $category = $node->filter('.blog-pill-link')->text();

                $categories[] = str_replace("#", '', $category);
            });

            $url = $node->filter('.bp-title')->attr('href');
            $articleNode = Goutte::request('GET', $this->domain . '/' . $url);

            $articlePhoto = null;
            $photoNode = $articleNode->filter('.blog-post-cover-image');

            if($photoNode->count() > 0) {
                $photoUrl = $articleNode->filter('.blog-post-cover-image')->attr('src');

                $articlePhoto = sha1($photoUrl) . ".jpg";

                if (!file_exists(public_path('storage/article/' . $articlePhoto))) {
                    Storage::disk('article')->put($articlePhoto, file_get_contents($photoUrl));
                } else {
                    echo "Article photo skipped: " . public_path('storage/article/' . $articlePhoto) . "\n";
                }
            }

            $content = $articleNode->filter('.s-blog-post .bp-rich-text')->html();
            $content = str_replace("Balance", 'Addtract', $content);
            $content = str_replace("balance", 'addtract', $content);
            $content = str_replace("U.S", 'South Africa', $content);

            $attributes = [
                'title' => $title,
                'blurb' => $blurb,
            ];

            $values = [
                'title' => $title,
                'blurb' => $blurb,
                'content' => $content,
                'app_id' => $this->app->id,
                'photo' => $articlePhoto
            ];

            $article = \App\Article::updateOrCreate($attributes, $values);

            echo ">>>>> Created blog resource: " . $article->title . " :::\n";

            foreach ($categories as $category) {
                $values = [
                    'name' => $category,
                    'resource_type' => ArticleCategory::TYPE_BLOG
                ];

                $articleCategory = ArticleCategory::updateOrCreate($values, $values);

                $values = [
                    'article_category_id' => $articleCategory->id,
                    'article_id' => $article->id,
                ];

                CategoryArticle::updateOrCreate($values, $values);

                echo ">>>>> >>>>> Created category blog link: " . $category . " :::\n";
            }
        });
    }

    private function _updateCategories()
    {

    }
}
