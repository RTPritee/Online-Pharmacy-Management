<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\supplier;
use Faker\Factory as FakerThree;

class supplierSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerThree::create();
        for ($i=1;$i <= 3;$i++){
            $sup = new supplier;
            $sup->address=$faker->address;
            $sup->image=$faker->image;
            $sup->save();
        }
    }
}
