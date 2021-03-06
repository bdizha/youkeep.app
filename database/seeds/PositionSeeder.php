<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    private $domain = 'https://shipt.breezy.hr';
    private $positionTypes = [];
    private $positionDepartments = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $positions = [];

        $this->positionTypes = \App\Position::$types;
        $this->positionDepartments = \App\Position::$departments;

        print_r($this->positionDepartments);

        $crawler = Goutte::request('GET', $this->domain);

        $crawler->filter('.positions .position')->each(function ($node) {

            $cities = [19, 172];

            $link = $this->domain . $node->filter('a')->attr('href');

            $title = $node->filter('h2')->text();
            $department = $node->filter('.meta .department span')->text();

            $jobNode = Goutte::request('GET', $link);

            $description = $jobNode->filter('.position-description .description')->html();
            $department = $this->findDepartment($department);

//            print_r([$department, $node->filter('.meta .department span')->text()]);

            $positionAttributes = [
                'title' => $title,
                'type' => 1,
            ];

            $description = str_replace('Shipt', 'Youkeep', $description);
            $description = str_replace('SHIPT', 'Youkeep', $description);
            $description = str_replace('shipt', 'Youkeep', $description);

            $positionValues = [
                'title' => $title,
                'type' => 1,
                'city_id' => $cities[rand(0, count($cities) - 1)],
                'department_type' => $department,
                'description' => $description,
                'requirements' => '',
                'expired_at' => date('Y-m-d', strtotime('+6 months')),
            ];

            $position = \App\Position::updateOrCreate($positionAttributes, $positionValues);

            echo 'Inserting >>> : ' . $position->title . "\n";
        });
    }

    function findDepartment($department)
    {
        $departmentParts = explode(' ', $department);

        foreach ($departmentParts as $dPart) {
            foreach ($this->positionDepartments as $departmentType => $pType) {
                if (strpos(strtolower($pType), strtolower($dPart)) !== false) {
                    return $departmentType;
                }
            }
        }
        return 7;
    }
}
