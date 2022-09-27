<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Biodatas;
use App\Models\Blogs;
use App\Models\Comments;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Database\Seeder;

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

            User::factory()->create([
                'username' => $datas->username
            ]);

            $blog = Blogs::factory()->create([
                'username' => $datas->username
            ]);

            Comments::factory()->create([
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
