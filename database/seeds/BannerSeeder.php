<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setBanners();
    }

    private function setBanners()
    {
        $images = [
            "client/static/banners/basic/05.png",
            "client/static/banners/classic/01.png",
            "client/static/banners/classic/02.png",
            "client/static/banners/classic/03.png",
            "client/static/banners/classic/04.png",
            "client/static/banners/classic/05.png",
            "client/static/banners/classic/06.png",
            "client/static/banners/classic/07.png",
            "client/static/banners/classic/08.png",
            "client/static/banners/standard/01.png",
            "client/static/banners/standard/02.png",
            "client/static/banners/standard/03.png",
            "client/static/banners/standard/04.png",
            "client/static/banners/standard/05.png"
        ];

        $banners = \App\Banner::get();

        $imagesCount = count($images) - 1;

        foreach($banners as $banner){
            $this->setBanner($banner, $images[rand(0, $imagesCount)]);
        }
    }

    protected function setBanner($banner, $photo)
    {
        $photoName = $this->getFileExt($photo);

        try{
            $photoPath = __DIR__ . '/../../' . $photo;

            Storage::disk('s3')->put($photoName, file_get_contents($photoPath));

            echo "Banner inserted: " . public_path('storage/banner/' . $photoName) . "\n";

            $banner->photo = $photoName;
            $banner->save();
        }
        catch (Exception $e){
            echo ">>>>> >>>>>> Failed banner: " . $e->getMessage() . " ::: {$photo}\n";
        }
    }
}
