<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
class vaccine_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create('th');

        $vaccines = [];
        for ($i = 0; $i < 100; $i++) {
            $vaccines[] = [
                'std_id' => rand(1, 50),
                'vac_id' => rand(1, 5),
                'vaccined_date' => $faker->dateTimeBetween($startDate = "-2 years", $endDate = 'now')->format('Ymd'),
            ];
        }

        DB::table('vaccine_record')->insert($vaccines);
    }

    
    }

