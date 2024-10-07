<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PermissionTableSeeder;
use Database\Seeders\CreateAdminUserSeeder;
use Database\Seeders\CreateClassSeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\QuestionSetSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            CreateClassSeeder::class,
            QuestionSeeder::class,
            QuestionSetSeeder::class,
        ]);
    }
}
