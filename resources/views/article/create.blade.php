@extends('app')
@section('content')
    <h1>Write A New Article</h1>    <hr>
    {!! Form::open(['url' => 'articles']) !!}
    <!--{{ var_dump($errors) }}-->
    @include('errors.list')
    @include('article.form', ['submitButtonText' => 'Add Article', 'published_at' => date('Y-m-d')])
    {!! Form::close() !!}
@stop