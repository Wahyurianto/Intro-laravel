@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('welcome') }}">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name"><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name"><br>
        <button type="submit">Register</button>
    </form>
@endsection
