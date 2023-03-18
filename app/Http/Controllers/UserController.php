<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::get();
        return view(
            'user.index',
            compact('users')
        );
    }
}
