<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class facultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faculty')->insert([
            [
                'faculty_th' => 'คณะพยาบาลศาสตร์',
                'faculty_en' => 'Faculty of Nursing',
            ],
            [
                'faculty_th' => 'คณะวิทยาการคอมพิวเตอร์',
                'faculty_en' => 'Faculty of Computer Science',
            ],
            [
                'faculty_th' => 'คณะครุศาสตร์',
                'faculty_en' => 'Faculty of Education',
            ],
            [
                'faculty_th' => 'คณะมนุษย์ศาสตร์',
                'faculty_en' => 'Faculty of Humanities',
            ],
            [
                'faculty_th' => 'คณะวิทยาการการจัดการ',
                'faculty_en' => 'Faculty of Management Science',
            ],
        ]);
    }
}
