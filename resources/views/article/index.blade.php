@extends('app')
@section('content')
    <h1>Articles</h1>
    @foreach($articles as $article)
        <h2><a href="{{url('article',$article->id)}}">{{$article->title}}</a></h2>
        <article>
            <div class="body">
                {{$article->content}}
            </div>
        </article>
    @endforeach
@stop