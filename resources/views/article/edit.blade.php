@extends('app')

@section('content')
    <h1>Edit : {{$article->title}}</h1>
    <hr>
    <!--{!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/'. $article->id]) !!}-->
    {!! Form::open(['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    <!--{{ var_dump($errors) }}-->
    @include('errors.list')
    @include('article.form', [
        'submitButtonText' => 'Update Article',
        'published_at' => date('Y-m-d', strtotime($article->published_at))
        ])
    {!! Form::close() !!}
@stop