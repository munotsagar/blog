@extends('app')

@section('content')
<h1>Create New Blog</h1>
    {!! Form::open(['url' => 'blog']) !!}
    @include('errors.list')
    @include('blog.form', ['submitButtonText' => 'Add Blog'])
    {!! Form::close() !!}
@stop