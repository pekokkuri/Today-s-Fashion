<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
        
        //画像があったら以下の保存処理準備を行う
        if($request->image){
            $image = $request->file('image');
            $path = Storage::disk('s3')->putFile('imageuploadpractice', $image, 'public');
            $post->image = Storage::disk('s3')->url($path);
        }
        
        //bodyの保存処理準備
        $input = $request['post']; 
        
        //保存処理
        $post->fill($input)->save();
        
        return redirect('/posts/' . $post->id);
    }
}