<?php

use Illuminate\Database\Seeder;
use \App\Property;

class UpdatePropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::get();

        foreach ($properties as $property) {
            if ($property->photos->count()) {
                echo "Updating property photo >>>> \n";

                $property->photo_id = $property->photos[0]->id;
                $property->save();
            }
        }
    }
}
