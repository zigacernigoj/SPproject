@extends('user')

@section('content')
    <h1>Rezervacije</h1>

    @foreach($reservations as $reservation)
        <article>
            <h3><a href="{{ action('ReservationController@show', [$reservation->id]) }}">
                    {{ $reservation->id }} |
                    user: {{ $reservation->user->username }} |
                    program: {{ $reservation->program->name }} |
                    {{ $reservation->canceled==1? 'preklicana':'veljavna' }}
                </a></h3>
            <div>
                user: {{ $reservation->user->username }}
                <br/>
                program: {{ $reservation->program->name }}

            </div>
        </article>

    @endforeach
@stop