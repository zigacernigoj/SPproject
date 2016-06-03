@extends('user')

@section('content')
    <h1>Uredi {{ $reservation->id }}</h1>
    <hr/>

    @include('errors.list')

    {!! Form::model($reservation, ['method'=>'PATCH', 'action' => ['ReservationController@update', $reservation->id]]) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.resCancelForm', ['submitButtonText'=>'Prekliči rezervacijo'])

    {!! Form::close() !!}

    <br/>



@stop