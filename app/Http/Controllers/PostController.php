<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::find(1);
        return $posts->tags;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    $post = Post::create([
    //     'title' => 'News Title Five',
    //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, voluptatem?'
    //    ]);
        $post = Post::find(1);

       //Attach an existing Tag
       $post->tags()->attach([5,7]);

       //Create a new Tag
    //    $post->tags()->create([
    //         'tag_name' => "Yahoo Baba",
    //    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
