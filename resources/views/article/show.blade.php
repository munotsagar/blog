@extends('app')

    @section('content')
        <h1>Article Detail Page</h1>
        <hr>
        <article>
            <div>{{$article->title}}</div>
            <div>{{$article->body}}</div>
        </article>
    @stop

