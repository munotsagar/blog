<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Carbon\Carbon;
//use Request;

use App\Http\Requests;

use App\Article;
use App\Tag;

use  App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

use Xabbuh\XApi\Client\XApiClientBuilder;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     * ArticlesController constructor.
     */
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

        $latest = Article::latest()->first();
        //$articles   = Article::order_by('published_at', 'desc')->get();
        return view('article.index', compact('articles', 'latest'));
    }

    public function show(Article $article)
    {
        //dd('Sagar');
       // $article    =   Article::findOrFail($id);

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
        $tags = Tag::lists('name', 'id');
        return view('article.create', compact('tags'));

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

       // $article = new Article($request->all());
       // Auth::user()->articles()->save($article);

       // \Session::flash('flash_message', 'Your article has been created!');
        //session()->flash('flash_message_important', false);
        //dd($request->input('tags'));


        //$article = Auth::user()->articles()->create($request->all()); // another way to save the article

        //$tagIds = $request->input('tags');

        //$article->tags()->attach($request->input('taglist'));
        //$article->tags()->attach($request->input('taglist'));

        //$this->syncTags($article, $request->input('taglist'));

        $this->createArticle($request);

        flash()->overlay('Your article has been successfully created!', 'Good Job');
        return redirect('articles');
    }

    public function edit(Article $article)
    {
        //$article = Article::findOrFail($id);
        //dd($article);
        $tags = Tag::lists('name', 'id');
        //$taglist = $article->taglist;
        //dd($taglist);
        return view('article.edit', compact('article', 'tags', 'taglist'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        //$article = Article::findOrFail($id);
        $article->update($request->all());
        //$article->tags()->sync($request->input('taglist'));

        $this->syncTags($article, $request->input('taglist'));

        //$article->tags()->detach($request->input('taglist'));
        return redirect('articles');
    }

    public function syncTags(Article $article, array $taglist)
    {
        $article->tags()->sync($taglist);
    }

    /**
     * Save new article.
     * @param ArticleRequest $request
     * @return mixed
     */
    public function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all()); // another way to save the article
        $this->syncTags($article, $request->input('taglist'));
        return $article;
    }
}
