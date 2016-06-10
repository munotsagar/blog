@extends('app')

@section('content')
    <h1>Blog Edit</h1>
    {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id]]) !!}
    @include('errors.list')
    {{--{{$blog->id}}--}}
    @include('blog.form', ['submitButtonText' => 'Update Blog'])
    {!! Form::close() !!}
@stop
