<?php

namespace App\Http\Controllers;

use id;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\ImagePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainContoller extends Controller
{
    function home(){
        $post = Post::with(['user','imagePost'])->get();
        return view('main.home',compact('post'));
    }
    function NewPost(){
        return view('main.NewPost');
    }
    function NewPostAction(Request $request){
        $fields = $request->validate([
            'title'=>['required','string','min:2'],
            'description'=>['required','string','max:2000'],
            'path'=>['mimes:jpg,png,jpeg,webp','max:5120'],      
            
        ]);
        $post =  Post::create([
            'title'=>$fields['title'],
            'description'=>$fields['description'],
            'user_id' =>Auth::user()->id,  

        ]);
        if(isset($fields['path'])){
        $imageName = time().'.'.$fields['path']->extension();
        $fields['path']->move(public_path('assets/images'),$imageName);
        $fields['path'] = $imageName;
        ImagePost::create([
            'post_id'=>$post->id,
            'path'=>$fields['path'],
        ]);
    }
        return redirect()->back()->with('success','Post created successfully!');
    }
    function PostComment(Request $request ,Post $id){
        $fields = $request->validate([
            'comment'=>['required','string','max:500'],
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id'=>$id->id,
            'comment'=> $fields['comment'],
        ]);
        return redirect()->route('HomePage');
    }
    function GetComment($id){
        $comment = Comment::with(['user'])
        ->where('post_id',$id)
        ->latest()
        ->get();
        return view('main.home',compact('comment'));
    }
}
