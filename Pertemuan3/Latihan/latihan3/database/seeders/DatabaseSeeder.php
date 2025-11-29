<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $users = User::factory(5)->create();

        $categories = Category::factory(2)->create();

        Post::factory(10)
            ->recycle($users)
            ->recycle($categories)
            ->create();
    }
}