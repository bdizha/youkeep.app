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

        foreach ($this->storeCategories as $storeCategory) {
            $level = $storeCategory->level;

            $url = config('app.client_url', config('app.url')) .  $storeCategory->category->route . "/L" . str_pad($level, 6, STR_PAD_LEFT, "0");
            $content = file_get_contents($url);

//            dd($content);
        }
    }
}
