<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(8);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }
}
