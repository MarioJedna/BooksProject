@extends('layouts.main')

@section('content')
    <form action="{{ route('register') }}" method="post"><br>
        @csrf
        <br><label for="name">Name</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <br><label for="email">Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <br><label for="password">Password</label><br>
        <input type="password" name="password"><br>

        <br><label for="password_confirmation">Confirm Password</label><br>
        <input type="password" name="password_confirmation"><br>

        <button type="submit">Register</button>
    </form>
@endsection
