<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\customer;
use Faker\Factory as Faker;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1;$i <= 5;$i++){
            $customers = new customer;
            $customers->name=$faker->name;
            $customers->email=$faker->email;
            $customers->password=$faker->password;
            $customers->conf_password=$faker->password;
            $customers->type="User";
            $customers->gender="male";
            $customers->save();

        }
    }
}
