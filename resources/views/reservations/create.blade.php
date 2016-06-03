@extends('user')

@section('content')
    <h1>Nova rezervacija vadbe</h1>
    <hr/>

    {!! Form::model($reservation = new \App\Reservation(), ['url' => 'reservations']) !!}
    {{-- lahko bi tudi z action --}}

    @include('forms.reservationForm', ['submitButtonText'=>'Ustvari novo rezervacijo'])

    {!! Form::close() !!}

    <br/>

    @include('errors.list')

@stop