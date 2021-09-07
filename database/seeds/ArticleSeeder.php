<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    protected $domain = 'https://www.getbalance.com';
    protected $app = null;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $crawler = Goutte::request('GET', $this->domain . '/blog');

        $crawler->filter('.w-dyn-list .bp-item')->each(function ($node) {

            $title = $node->filter('.bp-title')->text();
            $blurb = $node->filter('.bp-summary')->text();

            $categories = [];
            $node->filter('.cl-blog-tag')->each(function ($node)  use(&$categories){
                $category = $node->filter('.blog-pill-link')->text();

                $categories[] = str_replace("#", '', $category);
            });

            $url = $node->filter('.bp-title')->attr('href');
            $articleNode = Goutte::request('GET', $this->domain . '/' . $url);

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
                'article_type_id' => 4,
                'app_id' => $this->app->id
            ];

            $articleResource = \App\ArticleResource::updateOrCreate($attributes, $values);

            echo ">>>>> Created article resource: " . $articleResource->title . " :::\n";

            foreach($categories as $category){
                $values = [
                    'name' => $category,
                    'article_type_id' => 4
                ];

                $articleCategory = \App\ArticleCategory::updateOrCreate($values, $values);

                $values = [
                    'article_category_id' => $articleCategory->id,
                    'article_resource_id' => $articleResource->id,
                ];

                \App\CategoryArticle::updateOrCreate($values, $values);

                echo ">>>>> >>>>> Created category article link: " . $category . " :::\n";
            }
        });
    }

    protected function _setApp(): void
    {
        $appName = env('APP_NAME');
        $appUrl = env('APP_DOMAIN');
        $slogan = env('app_slogan');

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
}
