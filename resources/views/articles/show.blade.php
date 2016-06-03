@extends('user')

@section('content')
    <h1>{{ $article->title }} <small>published: {{ $article->publishedOn }}</small></h1>
    <div class="article-content">{{ $article->content}}</div>
@stop