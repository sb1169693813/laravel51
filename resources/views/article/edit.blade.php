@extends('app')
@section('content')
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    @include('article.form')
    {!! Form::close() !!}
    @include('errors.list')
@stop
