@extends('user')

@section('content')
    <h1>Nova novica</h1>
    <hr/>

    {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.articleForm', ['submitButtonText'=>'Ustvari novico'])

    {!! Form::close() !!}

    <br/>

    @include('errors.list')

@stop