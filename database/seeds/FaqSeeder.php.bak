<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    private $domain = 'https://web.archive.org';
    private $positionTypes = [];
    private $positionDepartments = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = "https://web.archive.org/web/20171117132357/http://help.shipt.com/";

        $crawler = Goutte::request('GET', $url);

        $categories = [];

        $crawler->filter('.category_icon')->each(function ($node) use (&$categories) {
            $category = $node->filter('span')->text();

            if (!in_array($category, $categories)) {
                $category = str_replace('Shipt', 'Shopple', $category);
                $category = str_replace('SHIPT', 'Shopple', $category);
                $category = str_replace('shipt', 'Shopple', $category);

                $categories[] = $category;
                $category = count($categories) - 1;
            }

            $link = $this->domain . $node->attr('href');
            $categoryNode = Goutte::request('GET', $link);

            $menu = $categoryNode->filter('#menu > li')->each(function ($node) use ($category) {

                $question = $node->filter('a')->eq(0)->text();
                $answer = $node->filter('article')->html();

                $question = str_replace('Shipt', 'Shopple', $question);
                $question = str_replace('SHIPT', 'Shopple', $question);
                $question = str_replace('shipt', 'kkart', $question);

                $answer = str_replace('Shipt', 'Shopple', $answer);
                $answer = str_replace('SHIPT', 'Shopple', $answer);
                $answer = str_replace('shipt', 'kkart', $answer);
                $answer = str_replace('kkart.com', 'kkart.co.za', $answer);

                $faqAttributes = [
                    'question' => $question,
                    'answer' => $answer,
                ];

                $faqValues = [
                    'group' => $category,
                    'is_active' => 1
                ];

                print_r($faqAttributes);

                $faq = \App\Faq::updateOrCreate($faqAttributes, $faqValues);

                echo 'Inserting >>> : ' . $faq->question . "\n";
            });

            print_r($categories);
        });
    }
}
