<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

class TweetController extends Controller
{

    public function store()
    {
        Tweet::create([
            'user_id'=> auth()->id(),
        ]);
    }



}
