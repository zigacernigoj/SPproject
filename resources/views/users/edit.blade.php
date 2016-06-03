@extends('user')

@section('content')
    <h1>Uredi {{ $user->username }}</h1>
    <hr/>

    @include('errors.list')

    {!! Form::model($user, ['method'=>'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.userForm', ['submitButtonText'=>'Posodobi profil'])

    {!! Form::close() !!}

    <br/>



@stop