@extends('app')

@section('content')

 <h1>Contact Us</h1>
    <div class="content">
        <div class="title">My Contact Page for {{$first}} {{$last}}</div>
        <div>Names:</div>
        <UL>
            @foreach($names as $name)
               <li> {{
                $name
                }}</li>
            @endforeach
        </UL>
    </div>

 @stop

@section('footer')
    <script>alert("Contact Us From");</script>
@stop
