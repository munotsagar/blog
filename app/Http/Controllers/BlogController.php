<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;


//use App\

class BlogController extends Controller
{
    //

    public function index()
    {
        $blogs = Blog::latest()->get();
        //dd($blogs);
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $request)
    {
        //dd(Auth::user());
        $blog = Auth::user()->blog()->create($request->all());
        flash()->overlay('Your Blog has been successfully created!', 'Good Job');
        return redirect('blog');
    }

    public function show(Blog $blog)
    {
        //$blogs = Blog::findOrFail($id);

        return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        //dd($blog);
        return view('blog.edit', compact('blog'));
    }

    public function update(Blog $blog, BlogRequest $request)
    {
        $blog->update($request->all());
        return redirect('blog');
    }

    public function destroy(Blog $blog)
    {
        //dd("Saggy here");
        try {
            $blog->delete();
            return response()->json(array(
                'response' => array(
                    'error' => false
                )));
        }
        catch(\Exception $e){
                return response()->json(array(
                    'response' => array(
                        'error' => true
                    )));
            }


    }
}
