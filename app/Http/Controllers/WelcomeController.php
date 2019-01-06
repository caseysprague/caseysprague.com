<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome')->with([
            'showBlog' => WinkPost::live()->count() > 0,
        ]);
    }
}
