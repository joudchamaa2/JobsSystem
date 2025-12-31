<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function home(){
        return view('admin.home');
    }
    function ManageUsers(){
        $user = User::where('name','!=',Auth()->user()->name)->get();
        return view('admin.ManageUsers',compact('user'));
    }
    function EditUser($id){
        $user = User::find($id);
        return view('admin.EditUser',compact('user'));
    }
    
}
