<?php

namespace App\Http\Controllers;

use App\post as Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $validateData = $this->validationData();

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect()->route('posts.index')->withMessage('ذخیره شد');
    }

    public function update(Post $post, Request $request)
    {
        $validateData = $this->validationData();

        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect()->route('posts.index')->withMessage('ویرایش شد');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->withMessage('حذف شد');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function validationData()
    {
        return $validateData = $this->validate(request(), [
            'title' => 'required|string|min:3|max:100',
            'content' => 'required|string|between:5,5000',
        ]);
    }
}
