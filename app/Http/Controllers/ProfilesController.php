<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{
    public function index(User $user, Profile $profile){
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'phone' => 'numeric|max:9999999999999999999|nullable',
            'email' => 'string|email|nullable',
            'description' => 'nullable'
        ]);

        $user->profile()->update($data);

        return redirect("/" . $user->id . "/profile");
    }

}
