<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/json_posts.json');
        $posts = collect(json_decode($json));

        $posts->each(function($post){
            Post::create([
                'title' => $post->title,
                'description' => $post->description,
            ]);
        });


    }
}
