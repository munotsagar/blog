@extends('app')
@section('content')
    <h1>Write A New Article</h1>    <hr>
    {!! Form::open(['url' => 'articles']) !!}
    <!--{{ var_dump($errors) }}-->
    @include('errors.list')
    @include('article.form', ['submitButtonText' => 'Add Article', 'published_at' => Carbon\Carbon::now()])
    {!! Form::close() !!}
@stop