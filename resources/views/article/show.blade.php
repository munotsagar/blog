@extends('app')

    @section('content')
        <h1>Article Detail Page</h1>
        <hr>
        <article>
            <div>{{$article->title}}</div>
            <div>{{$article->body}}</div>
        </article>

        <br>
        @unless($article->tags->isEmpty())
            <h1> Article Tags List</h1>

            <ul>
                @foreach($article->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endunless
    @stop

