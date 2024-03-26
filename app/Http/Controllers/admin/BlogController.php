<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all posts from the database
        $posts = Post::all();
        $pageTitle = 'Blog';
        return view('admin.blog.index', compact('posts', 'pageTitle'));
    }

    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retrieve all categories from the database to display in the form
        $categories = Category::all();
        $pageTitle = 'Create Blog';
        return view('admin.blog.create', compact('categories', 'pageTitle'));
    }

    /**
     * Store a newly created blog post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data sent from the form
        $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_category_id' => 'required',
            'post_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validation rules for image
        ]);

        // Handle image upload
        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/post_images', $imageName);
        } else {
            $imageName = null;
        }

        // Save new post data to the database
        $post = new Post([
            'post_title' => $request->post_title,
            'post_description' => $request->post_description,
            'post_category_id' => $request->post_category_id,
            'post_image' => $imageName, // save image name to database
            'user_id' => Auth::id(),
        ]);
        $post->save();

        // Redirect to index page with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }
    public function edit($id)
    {
        // Retrieve the post by ID
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $pageTitle = 'Edit Blog';
        return view('admin.blog.edit', compact('post', 'categories', 'pageTitle'));
    }


    public function update(Request $request, $id)
    {
        // Validate data sent from the form
        $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_category_id' => 'required',
            'post_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validation rules for image
        ]);

        // Find the post by ID
        $post = Post::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('post_image')) {
            // Delete the previous image if exists
            if ($post->post_image) {
                Storage::delete('/storage/public' . $post->post_image);
            }
            // Upload and store the new image
            $image = $request->file('post_image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/storage/public', $imageName);
            $post->post_image = $imageName;
        }

        // Update the post data
        $post->post_title = $request->post_title;
        $post->post_description = $request->post_description;
        $post->post_category_id = $request->post_category_id;
        $post->save();

        // Redirect back to index page with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);

        // Delete the post
        $post->delete();

        // Redirect back to index page with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }
}
