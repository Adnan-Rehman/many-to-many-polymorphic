<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/json_videos.json');
        $videos = collect(json_decode($json));

        $videos->each(function($video){
            Video::create([
                'title'=> $video->title,
                'url' => $video->url,
            ]);
        });
    }
}
