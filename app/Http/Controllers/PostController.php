<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
      $posts = Post::all();
      return view('posts.index',compact('posts'));
    }
    public function show(Post $post)
    {
      return view ('posts.show',compact('post'));
    }
    public function create()
    {
        $post = new Post;
        return view('posts.form', compact('post'));
    }
    public function store()
    {
        $data = self::prepareValidation();
        Post::create($data);
        return redirect()->route('posts.index')->withMessage('Add Text saved successfully');
    }
    public function edit(Post $post)
    {

      return view('posts.form',compact('post'));
    }
    public function update(Post $post)
    {
      $data = self::prepareValidation();
      if($data['image'] && $post->image){
        deleteFile($post->image);
      }
      $post->update($data);
      return redirect()->route('posts.index')->withMessage('Changes saved successfully');
    }
    public function destroy(Post $post)
    {
      $post->delete();
      if($post->image){
        deleteFile($post->image);
      }
      return redirect()->route('posts.index')->withMessage('delete item successfully');
    }
    public static function prepareValidation()
    {
      $data= request()->validate([
          'title' =>'required|string|between:3,200',  //validation rule
          'description' =>'required|string|between:20,500',
          'image' =>'nullable|image|max:1000',
      ]);
      $data['image'] = upload($data['image']);
      return $data;
    }
}
