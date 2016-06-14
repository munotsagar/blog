<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $articles =  $tag->articles;

        return view('article.index', compact('articles'));
    }
}
