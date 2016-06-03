@extends('user')

@section('content')
    <h1>{{ $user->username }}</h1>
    <h3>{!! link_to_action('UserController@edit', "Uredi profil", [$user->id]) !!}</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <td>username</td>
                    <td>{{ $user->username }}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ime</td>
                    <td>{{ $user->firstName }}</td>
                </tr>
                <tr>
                    <td>priimek</td>
                    <td>{{ $user->lastName }}</td>
                </tr>
                <tr>
                    <td>spol</td>
                    <td>{{ $user->gender }}</td>
                </tr>

                <tr>
                    <td>datum rojstva:</td>
                    <td>{{ $user->birthDate }}</td>
                </tr>
                <tr>
                    <td>alergije</td>
                    <td>{{ $user->allergies }}</td>
                </tr>
                <tr>
                    <td>bolezni</td>
                    <td>{{ $user->diseases }}</td>
                </tr>
                <tr>
                    <td>zdravila</td>
                    <td>{{ $user->medications }}</td>
                </tr>
                <tr>
                    <td>ostale zdravstvene opombe</td>
                    <td>{{ $user->otherHealth }}</td>
                </tr>
                <tr>
                    <td>elektronski naslov</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>telefonska številka</td>
                    <td>{{ $user->phoneNumber }}</td>
                </tr>
                <tr>
                    <td>naslov</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td>registiran</td>
                    <td>{{ $user->registeredOn->format('d.m.Y H:i') }}</td>
                </tr>
                <tr>
                    <td>vloga</td>
                    <td>{{ $user->role }}</td>
                </tr>

            </tbody>
        </table>
    </div>

    {!! link_to_action('ReservationController@oneUser', "uporabnikove rezervacije", [$user->id]) !!}


@stop