<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $users= User::all();
        return view('admin')->with(["users"=>$users]);
    }
    public function update($id){
        $status = User::find($id);
        return view('home',compact('status'));
    }
}
