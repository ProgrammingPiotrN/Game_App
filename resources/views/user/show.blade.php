@extends('layouts.main')

@section('title', 'User')

@section('sidebar')
    @parent
    Dziecko
    Sidebar z dziecka
    @auth
        <ul>
            <li>LINK</li>
        </ul>
    @endauth
@endsection

@section('content')
    <hr>
        <h3>Informacje o użytkowniku</h3>

        @guest
            <div>Użytkownik nie jest zalogowany</div>
        @endguest

        <ul>
            <li>Id: {{ $user['id'] }}</li>
            <li>Name: {{ $user['name'] }}</li>
            <li>First Name: {{ $user['firstName'] }}</li>
            <li>Last Name: {{ $user['lastName'] }}</li>
            <li>City: {{ $user['city'] }} </li>
            <li>
                Age: {{ $user['age'] }}
                @if ($user['age'] >= 18)
                    <div>Osoba dorosła</div>
                @elseif ($user['age'] >= 16)
                    <div>Prawie dorosły</div>
                @else
                    <div>Osoba niepełnoletnia</div>
                @endif
            </li>
        </ul>
    <hr>
@endsection

