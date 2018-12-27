<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Images;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns all posts and related images
        $getPosts = Posts::all();
        $posts = [];

        foreach ($getPosts as $post) {
            $images = [];
            $getImages = Images::where('post_id', $post->post_id)->get();
            foreach ($getImages as $key => $image) {
            $images[] = [
                "image_id" => $image->image_id,
                "post_id" => $image->post_id,
                "image_path" => $image->image_path
                ];
            }

            $posts[] = [
                "post_id" => $post->post_id,
                "post_title" => $post->post_title,
                "post_content" => $post->post_content,
                "post_images" => $images,
                "post_date" => $post->created_at
            ];
        }

        return view('post', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        echo($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
