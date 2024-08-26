<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            facultySeeder::class,
            programSeeder::class,
            studentSeeder::class,
            vaccineSeeder::class,
            vaccine_recordSeeder::class,
        ]);
    }
}
