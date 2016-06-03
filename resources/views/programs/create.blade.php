@extends('user')

@section('content')
    <h1>Nov program vadbe</h1>
    <hr/>

    {!! Form::model($program = new \App\Program(), ['url' => 'programs']) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.programForm', ['submitButtonText'=>'Ustvari nov program vadbe'])

    {!! Form::close() !!}

    <br/>

    @include('errors.list')

@stop