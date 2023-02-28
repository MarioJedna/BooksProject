@extends('layouts.main')

@section('content')
    <h1>cus {{ $user->name }}</h1>
    <p>your password hash is <strong>{{ $user->password }}</strong></p>
@endsection
