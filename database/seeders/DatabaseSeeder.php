<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Biodatas;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Questions;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Symfony\Component\Finder\Glob;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $i = 0;
        Biodatas::factory(10)->create()->each(function ($datas) {

            Users::factory()->create([
                'username' => $datas->username
            ]);

            $blog = Blog::factory()->create([
                'username' => $datas->username
            ]);

            Comment::factory()->create([
                'id_blog' => $blog->id,
                'username' => $datas->username,
                'description' => fake()->paragraphs(10, true)
            ]);

            Questions::factory()->create([
                'username' => $datas->username,
            ]);
        });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
