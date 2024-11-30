<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Taggable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TaggablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/json_taggables.json');
        $taggables = collect(json_decode($json));

        $taggables->each(function($taggable){
            Taggable::create([
                'tag_id' => $taggable->tag_id,
                'taggable_id' => $taggable->taggable_id,
                'taggable_type'=> $taggable->taggable_type,
            ]);
        });

    }
}
