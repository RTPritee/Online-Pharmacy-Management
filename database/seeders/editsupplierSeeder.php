<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\editsupplier;
use Faker\Factory as FakerTwo;

class editsupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerTwo::create();
        for ($i=1;$i <= 6;$i++){
            $sup = new editsupplier;
            $sup->name=$faker->name;
            $sup->email=$faker->email;
            $sup->dateOfJoin=$faker->date;
            $sup->shift="Sun-Tue-Thrs";
            $sup->salary="6000";
            $sup->bonus="800";
            $sup->vehicle="Bike";
            $sup->save();

        }
    }
}
