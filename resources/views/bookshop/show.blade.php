@extends('layouts.main')

@section('content')
    <h1>{{ $bookshop->name }}</h1>
    <h4>{{ $bookshop->city }}</h4>
    @foreach ($bookshop->books as $book)
        <div>
            <div>{{ $book->title }}</div>
            <img src="{{ $book->image }}" alt="">
        </div>
    @endforeach
@endsection
