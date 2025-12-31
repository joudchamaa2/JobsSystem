<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 440385a20b5e6617819db77144ce48a098cc0dfc

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function home(){
        return view('admin.home');
    }
<<<<<<< HEAD
    function ManageUsers(){
        $user = User::where('name','!=',Auth()->user()->name)->get();
        return view('admin.ManageUsers',compact('user'));
    }
    function EditUser($id){
        $user = User::find($id);
        return view('admin.EditUser',compact('user'));
    }
    
=======
>>>>>>> 440385a20b5e6617819db77144ce48a098cc0dfc
}
