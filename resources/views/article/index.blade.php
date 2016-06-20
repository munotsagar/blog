@extends('app')

@section('content')
    <h1>Articles List Page</h1>
    {{--<div>
        @foreach($articles as $article)
        <article>
            <h3><a href="{{action('ArticlesController@show', [$article->id])}}"> {{$article->title}}</a></h3>
            <div>{{$article->body}}</div>
            <div>{{$article->published_at}}</div>
        </article>
        @endforeach
    </div>--}}


    <table class="table">
        <thead>
        {{--<tr>
            <th colspan="2"><h4><a href="{{ url('/articles/create') }}">Add New</a></h4></th>

            <th></th>
            <th></th>
        </tr>--}}
        <tr>
            <th>Sr. No</th>
            <th>Article Title</th>
            <th>Article Body</th>
            <th>Published At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @set('i', $page)
        @foreach($articles as $article)
            <tr class="success">
                {{--{{ dd($blog) }}--}}
                <td>{{$i}}</td>
                <td>{{--$blog->name--}}
                    <a href="{{  url('/articles/'.$article->id) }}">{{$article->title}}</a>
                </td>
                <td>{{ $article->body }}</td>
                <td>{{$article->published_at}}</td>
                <td><a href="{{url('/articles/'.$article->id.'/edit') }}"> Edit </a>/ <a
                            href="javascript:checkDeleteArticle('{{ url('/articles/'.$article->id) }}');">Delete</a></td>
            </tr>
            {{--{{$i = $i+1}}--}}
            @set('i', $i+1)
        @endforeach
        </tbody>
    </table>
    <div class="pagination"> {{ /*$articles->links()*/
     $articles->render() }} </div>
@stop

@section('footer')
    <script>
        function checkDeleteArticle(url) {
            if (confirm('Really delete this Article?')) {
                $.ajax({
                    type: "DELETE",
                    url: url,
                    dataType: "json",
                    success: function(result) {
                        if(result.response.error == false)
                        {
                            alert("Blog deleted successfully...");
                            document.location.reload(true);
                        }
                    }
                });
            }
        }
    </script>
@stop