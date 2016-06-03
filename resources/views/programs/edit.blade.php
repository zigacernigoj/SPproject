@extends('user')

@section('content')
    <h1>Edit {{ $program->name }}</h1>
    <hr/>

    {!! Form::model($program, ['method'=>'PATCH', 'action' => ['ProgramController@update', $program->id]]) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.programForm', ['submitButtonText'=>'Posodobi program'])

    {!! Form::close() !!}

    <br/>

    @include('errors.list')

@stop