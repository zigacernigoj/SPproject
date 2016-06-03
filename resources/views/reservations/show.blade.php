@extends('user')

@section('content')
    <h1>rezervacija za uporabnika {{ $reservation->user->username }} za program {{ $reservation->program->name }}</h1>
    <div>čas: {{ $reservation->length }}</div>
    <div>plačilo: {{ $reservation->payment }}</div>
    <div>Rezervirano dne {{ $reservation->created_at->format('d. m. Y') }}</div>
    <div>preklicana: {{ $reservation->canceled == 0 ? 'ne':'da' }}</div>

    <div>plačano: {{ $reservation->payed == 0 ? 'ne' : 'da' }}</div>
    @if($reservation->payed == 1)
        <div>plačano dne: {{ $reservation->payedOn->format('d. m. Y') }}</div>
    @endif

    <br/>
    {!! link_to_action('ReservationController@edit', "Prekliči rezervacijo", [$reservation->id]) !!}


@stop