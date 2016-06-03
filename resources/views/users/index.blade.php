@extends('user')

@section('content')
    <h1>Vsi uporabniki</h1>

    @foreach($users as $user)
        <article>
            <h2><a href="{{ action('UserController@show', [$user->id]) }}">{{ $user->username }}</a></h2>
        </article>

    @endforeach
@stop