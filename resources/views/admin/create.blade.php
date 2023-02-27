@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.authors.store') }}" method="post">
        @csrf
        Name: <input type="text" name="name" id="name"><br>
        Bio: <input type="text" name="bio" id="bio"><br>
        <button type="submit">Submit</button>
    </form>
@endsection
