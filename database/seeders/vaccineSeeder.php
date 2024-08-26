<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class vaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine')->insert([
            ['vaccine' => 'Sinovac',],
            ['vaccine' => 'AstraZeneca',],
            ['vaccine' => 'Pfizer',],
            ['vaccine' => 'Moderna',],
            ['vaccine' => 'Covavax',],

           
        ]);
    }
}
