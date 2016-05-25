<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Carbon\Carbon;
use Request;

use App\Http\Requests;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        //$articles   = Article::all();
        //echo Carbon::now();
        //$articles   = Article::latest()->get();
        //$articles   = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        $articles   = Article::latest('published_at')->published()->get();
        //$articles   = Article::order_by('published_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        //dd('Sagar');
        $article    =   Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        return view('article.create');

    }

    public function store()
    {
        //$input = Request::all();
        //$input = Request::get('title');
        //dd(Carbon::now());
        //$input['published_at'] = Carbon::now();

        //$input['excerpt'] = "Auto excerpt";

        Article::create(Request::all());
        return redirect('articles');
    }
}
