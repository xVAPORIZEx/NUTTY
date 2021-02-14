<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'post' => Post::all(),
        ];
        return view('post.index', $data);
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $thumbnail = $request->input('thumbnail');
        $detail = $request->input('detail');

        $post = new Post();
        $post->id = $id;
        $post->title = $title;
        $post->thumbnail = $thumbnail;
        $post->detail = $detail;
        $post->save();

        return redirect('/user');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        $data = [
            'post' => $post

        ];

        return view('post.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');

        $post = Post::find($id);
        $post->name = $name;
        $post->save();

        return redirect('/post');
    }

    public function delete($id)
    {
        $category = Post::find($id);
        $category->delete();
        return redirect('/post');

    }
}
