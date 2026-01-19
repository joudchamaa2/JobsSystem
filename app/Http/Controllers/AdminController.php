<?php

namespace App\Http\Controllers;

use App\Models\Post;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function home(){
        $user = User::count('id');
        $post = Post::count('id');
        return view('admin.home',compact('user','post'));
    }

    function ManageUsers(){
        $user = User::where('name','!=',Auth::user()->name)->get();
        $deleteUser = User::onlyTrashed()->get();
        return view('admin.ManageUsers',compact('user','deleteUser'));
    }
    function EditUser($id){
        $user = User::find($id);
        return view('admin.EditUser',compact('user'));
    }function EditUserRoleA(User $id){
        if($id->role != 'admin'){
            $id->role = 'admin';
            $id->save();
        }
        
        return redirect()->back()->with('success','User Role Updated to Admin');
        }
    
    function EditUserRoleE(User $employee){
        if($employee->role != 'employer'){
            $employee->role = 'employer';
            $employee->save();
        }
        
        return redirect()->back()->with('success','User Role Updated to Employer');
    }
    function EditUserRoleU(User $user){
        if($user->role != 'user'){
        $user->role = 'user';
        $user->save();
        }
        
        return redirect()->back()->with('success','User Role Updated To User');
    

    }
    function DeleteUser(User $delete){
        $delete->delete();
        return redirect()->back()->with('success','User deleted successfuly');
    }
    function RestoreUser($restore){
        $user = User::onlyTrashed()->find($restore);
        $user->restore();
        return redirect()->back()->with('success','User restored successfully');
    }
    function ManagePost(){
        $post = Post::with('user')->get();
        return view('admin.ManagePost',compact('post'));
    }
    function ViewPost(Post $id){
        $post = Post::with(['user','imagePost'])->find($id);
        return view('admin.ViewPost',compact('post'));
    }
    function DeletePost(Post $id){
        $id->delete();
        return redirect()->route('ManagePost')->with('success','Post Deleted Successfully');
    }

}
