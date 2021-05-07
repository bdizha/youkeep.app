<?php

use Illuminate\Database\Seeder;

class PrefetchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->storeCategories = \App\StoreCategory::with('category')
            ->orderBy('updated_at', 'ASC')
            ->get();

        $url = config('app.api_url', config('app.url')) . "/api/categories";

        file_get_contents($url);

        foreach ($this->storeCategories as $storeCategory) {
            $level = $storeCategory->level;

            try {
                $url = url("/api" . $storeCategory->category->route . "/L" . str_pad($level, 6, STR_PAD_LEFT, "0"));

                echo "Fetching category: " . $storeCategory->category->route . "\n";

                $content = file_get_contents($url);

                $storeCategory->updated_at = \Carbon\Carbon::now();
                $storeCategory->save();

//            dd($content);

            } catch (Exception $e) {
                echo "Error category: " . $storeCategory->category->route . "\n";
            }
        }
    }
}
