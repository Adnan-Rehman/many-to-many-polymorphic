<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/json_tags.json');
        $tags = collect(json_decode($json));

        $tags->each(function($tag){
            Tag::create([
                'tag_name' => $tag->tag_name,
            ]);
        });

    }
}
