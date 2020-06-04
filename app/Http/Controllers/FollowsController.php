<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        auth()
            ->user()->
            togggleFollow($user);

        return back();


    }
}
