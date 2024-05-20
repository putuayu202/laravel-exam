<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function create()
    {
        return view('post.form-create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption'   => 'required|string|max:1000',
            'picture'     => 'required'

        ]);



        $post = new Post;
        $post->caption = $request->caption;
        $post->userId = Auth::id();
        $post->save();

        $id_post = $post->postId;
        $file = $request->file('picture');

        // Store the file in storage/app/public directory
        $path = $file->store('public');
        $post_image = new PostImage;
        $post_image->postId = $id_post;
        $post_image->imgDir = $path;
        $post_image->imgUrl = $path;
        $post_image->save();


        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }

    public function my_page(){
        // Fetch posts with their images
        $user_id = Auth::id();
        $posts = Post::with('images')->get();
        $user = User::with('userDetail')->findOrFail($user_id);
        // Pass the data to the view
        $data = array(
            'data_post' => $posts,
            'data_user' => $user
        );
        return view('post.profile-page', compact('data'));
    }

    public function post_detail(){
        $posts = Post::with('images')->get();
        return view('post.post-detail');
    }
}
