<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">iLRS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                <li class="active"><a href="{{  url('/home') }}">Home</a></li>

                @else
                <li><a href="{{ url('/about') }}">About</a></li>
                <li class="dropdown">
                    <a href="{{ url('/articles') }}">
                        Articles <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/articles/create') }}"><i class="fa fa-btn fa-sign-out"></i>Add Article</a></li>
                    </ul>

                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li class="dropdown">

                    <a href="{{ url('/blog') }}">
                        Blog <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/blog/create') }}"><i class="fa fa-btn fa-sign-out"></i>Add Blog</a></li>
                    </ul>

                </li>
                @endif
            </ul>

            {{--<ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id])
                !!}}</li>--}}{{--$latest value will be fetch from E:\php\htdocs\blog\app\Providers\AppServiceProvider.php
                 from boot method --}}{{--
            </ul>--}}
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>
                            Sign Up</a></li>
                @else
                    <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id])
                !!}}</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>