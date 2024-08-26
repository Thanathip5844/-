<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class programSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program')->insert([
            [
                'program_th' => 'วิชาสังคม',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>1,
            ],
            [
                'program_th' => 'คณะพยาบาลศาสตร์',
                'program_en' => 'Faculty of Nursing',
                'grad_year' =>2024,
                'prg_fac_id' =>2,
            ],
            [
                'program_th' => 'คณะครุศาสตร์',
                'program_en' => 'Faculty of Education',
                'grad_year' =>2024,
                'prg_fac_id' =>3,
            ],
            [
                'program_th' => 'คณะมนุษย์ศาสตร์',
                'program_en' => 'Faculty of Humanities',
                'grad_year' =>2024,
                'prg_fac_id' =>4,
            ],
            [
                'program_th' => 'คณะวิทยาการการจัดการ',
                'program_en' => 'Faculty of Management Science',
                'grad_year' =>2024,
                'prg_fac_id' =>5,
            ],
           
        ]);
    }
}
