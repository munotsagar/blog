@extends('app')

@section('content')
    <h1>Articles List Page</h1>
    <div>
        @foreach($articles as $article)
        <article>
            <h3><a href="{{action('ArticlesController@show', [$article->id])}}"> {{$article->title}}</a></h3>
            <div>{{$article->body}}</div>
            <div>{{$article->published_at}}</div>
        </article>
        @endforeach
    </div>
@stop