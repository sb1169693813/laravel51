@extends('app')
@section('content')
    <h2><a href="">{{$article->title}}</a></h2>
    <article>
        <div class="body">
            {{$article->content}}
        </div>
    </article>
@stop
