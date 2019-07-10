<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    Public function index($user){
        // dd($user);
        $user = User::findOrFail($user);
        return view('profiles.index',[
            'user' => $user,
        ]);
    }

    public  function  edit(User $user){
        $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));

    }
    public function update(User $user){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',

        ]);

       auth()->user()->profile->update($data);

       return redirect("/profile/{$user->id}");

    }
}
