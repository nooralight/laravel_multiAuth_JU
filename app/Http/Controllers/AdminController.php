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

    public function updateStatusA($id)
    {
        //dd($id);
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        return redirect()->route("admin");
    }
    public function updateStatusB($id)
    {
        //dd($id);
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        return redirect()->route("admin");
    }
}
