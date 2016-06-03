@extends('user')

@section('content')
    <h1>Edit {{ $article->title }}</h1>
    <hr/>

    {!! Form::model($article, ['method'=>'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.articleForm', ['submitButtonText'=>'Posodobi novico'])

    {!! Form::close() !!}

    <br/>

    @include('errors.list')

@stop