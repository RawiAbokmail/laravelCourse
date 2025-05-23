<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request)
    {
        // 1. validation           done

        // 2. save file
        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads', 'custom');
        }
        // 3. store in data
        DB::table('posts')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path ?? 'no-image.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // 4. redirect
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
        // dd($request->except('_token'));

    }
}
