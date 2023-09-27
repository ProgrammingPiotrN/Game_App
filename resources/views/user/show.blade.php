@extends('layouts.main')

@section('title', 'User')

@section('content')
    <hr>
        <h3>Informacje o użytkowniku</h3>
        <ul>
            <li>Id: {{ $user['id'] }}</li>
            <li>Name: {{ $user['name'] }}</li>
            <li>First Name: {{ $user['firstName'] }}</li>
            <li>Last Name: {{ $user['lastName'] }}</li>
            <li>City: {{ $user['city'] }}</li>
            <li>Age: {{ $user['age'] }}</li>
        </ul>
    <hr>
@endsection

