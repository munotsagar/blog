@extends('app')

@section('content')
    <h1>{{$blog->name}}</h1>
    <div>{{$blog->description}}</div>
    <a href="{{  url('/blog') }}">Go Back</a>
@stop