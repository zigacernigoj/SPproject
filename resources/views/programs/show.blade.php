@extends('user')

@section('content')
    <h1>{{ $program->name }}</h1>
    <div>{{ $program->description }}</div>
@stop