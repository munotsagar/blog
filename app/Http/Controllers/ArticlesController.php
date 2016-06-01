<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Carbon\Carbon;
//use Request;

use App\Http\Requests;

use App\Article;

use  App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

use Xabbuh\XApi\Client\XApiClientBuilder;


class ArticlesController extends Controller
{
    public function __construct()
    {
        //dd("Saggy Here");
        //$this->middleware('auth', ['only' => 'create']);
        //$this->middleware('auth', ['except' => 'index']);
        $this->middleware('auth', ['only' => 'index']);

        /*$builder = new XApiClientBuilder();
        $xApiClient = $builder->setBaseUrl('http://mysite.sm/managercheck')
            ->setAuth('sagarmunot', 'password')
            ->build();
        $statementsApiClient = $xApiClient->getStatementsApiClient();
        $stateApiClient = $xApiClient->getStateApiClient();
        $activityProfileApiClient = $xApiClient->getActivityProfileApiClient();
        $agentProfileApiClient = $xApiClient->getAgentProfileApiClient();
        echo "<pre>";
        print_r($xApiClient);exit;*/
    }

    public function index()
    {
        //$articles   = Article::all();
        //echo Carbon::now();
        //$articles   = Article::latest()->get();
        //$articles   = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        //$articles   = Article::latest('published_at')->unpublished()->get();
        $articles   = Article::latest('published_at')->published()->get();
        //$articles   = Article::order_by('published_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        //dd('Sagar');
        $article    =   Article::findOrFail($id);

        //dd($article->created_at->addDays(8)->format('Y-m-d'));
        //dd($article->created_at->addDays(8)->diffForHumans());
        //dd($article->published_at);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        /*if(Auth::guest())
        {
            return redirect('articles');
        }*/
        return view('article.create');

    }

    public function store(ArticleRequest $request)
    {
        //$input = Request::all();
        //$input = Request::get('title');
        //dd(Carbon::now());
        //$input['published_at'] = Carbon::now();

        //$input['excerpt'] = "Auto excerpt";

        //Article::create(Request::all());
        //Article::create($request->all());
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        //dd($article);
        return view('article.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
