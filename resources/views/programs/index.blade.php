@extends('user')

@section('content')
    <h1>Programi vadb</h1>

    @if($currentUser != null && ($currentUser->isAManager() || $currentUser->isAnAdmin()))
        <h3><a href="{{ action('ProgramController@create') }}">Ustvari nov program vadbe</a></h3>
    @endif


    @foreach($programs as $prog)
        <article>
            <h2><a href="{{ action('ProgramController@show', [$prog->id]) }}">{{ $prog->name }}</a>
                @if($currentUser != null && ($currentUser->isAManager() || $currentUser->isAnAdmin()))
                    <small><a href="{{ url('programs/' . $prog->id . '/edit') }}">[uredi]</a></small>
                @endif

            </h2>
        </article>

    @endforeach

    {!! $programs->render() !!}

@stop