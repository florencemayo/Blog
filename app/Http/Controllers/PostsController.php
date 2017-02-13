<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	return view('posts.index', compact('posts'));
    }

    public function show($id){
    	$post =  Post::find($id);
    	return view('posts.show', compact('post'));
    }

    public function create(){
    	$users = User::all();
        $data['user'] = User::find(1);
        $data['users'] = $users;
    	return view('posts.create', $data);
    }

    public function store(Request $request, User $user){
        $post = new Post();
        $post->uri = $request->uri;;
        $post->tags = $request->tags;
        $post->status = "Pending";
        $post->title = $request->title;
        $post->user_id = $request->user;
        $post->body = $request->body;
        $post->summary = $request->summary;
        
        $this->validate($request, [
            'body' => 'required',
            'title' => 'required|min:10']);
        $post->save();
        return back();
    }

    public function userFromPost(Post $post){
        $user_id = $post->user_id;
        $user =  User::find($user_id);
        $authorName = $user->username;
        return $authorName;
    }

    public function edit(Post $post){
        $post->load('comments.user');
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $user = User::find($post->user_id);
        $user->username = $request->username;
        $user->save();

        $post->uri = $request->uri;;
        $post->tags = $request->tags;
        $post->status = "Pending";
        $post->title = $request->title;
        $post->body = $request->body;
        $post->summary = $request->summary;
        $post->save(); 
        
        return back();
    }
}
