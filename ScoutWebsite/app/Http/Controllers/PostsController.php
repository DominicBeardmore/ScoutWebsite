<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

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
                $tempUrl = Storage::temporaryUrl(
                    $image->image_path, now()->addMinutes(5)
                );
            $images[] = [
                "image_id" => $image->image_id,
                "post_id" => $image->post_id,
                "image_path" => $tempUrl
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
        $this->authorize('update', User::class);

        $request = $request->all();

        $imagesToStore = [];
        $imagesModel = [];
        $post = new Posts;

        $post->post_title = $request['postTitle'];
        $post->post_content = $request['postDescription'];

        $post->save();

        foreach ($request['postImage'] as $key => $image) {
            $imagesToStore[$key] = Storage::putFile('image', $image);
            $imagesModel[$key] = new Images;
            $imagesModel[$key]->image_path = Storage::putFile('image', $image);
            $imagesModel[$key]->post_id = $post->id;
            $imagesModel[$key]->save();
        }

        return redirect('home')->with('status', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::where('post_id', $id)->first();
        $getImages = Images::where('post_id', $id)->get();

        foreach ($getImages as $image) {
            $image->image_path = Storage::temporaryUrl(
                $image->image_path, now()->addMinutes(5)
            );
        }

        return view('gallery', [
            'title' => $post->post_title,
            'images' => $getImages
            ]);
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
    public function destroy(Request $post_id)
    {
        $this->authorize('update', User::class);

        $request = $post_id->all();
        $id = $request['deleteID'];

        Posts::destroy($id);

        return redirect('home')->with('status', 'Post deleted');
    }
}
