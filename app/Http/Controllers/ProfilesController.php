<?php

namespace App\Http\Controllers;
/*Referencing the user.php*/
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user =User::findorFail($user);
        return view('profiles.index',[
            'user' => $user,
        ]);
    }
}
