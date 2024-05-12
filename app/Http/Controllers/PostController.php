<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',  
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function index()
{
    $posts = Post::all();  // Retrieves all posts from the database
    return view('posts.index', compact('posts'));  // Returns the view with all posts
}
public function destroy($id)
{
    $post = Post::findOrFail($id);

    
    if (!(auth()->id() === $post->user_id || auth()->user()->role === 'admin')){
        abort(403);
    }

    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
}
public function show(Post $post)
{
    return view('posts.show', compact('post'));
}

public function edit(Post $post)
{
    
    if (!(auth()->id() === $post->user_id || auth()->user()->role === 'admin')){
        abort(403);
    }

    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    
    if (!(auth()->id() === $post->user_id || auth()->user()->role === 'admin')){
        abort(403);
    }

    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'description' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $post->image_path = $imagePath;
    }

    $post->update($request->only('title', 'content', 'description'));

    return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully');
}
}