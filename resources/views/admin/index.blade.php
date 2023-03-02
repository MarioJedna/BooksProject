@extends('layouts.admin')

@section('content')
    @foreach ($authors as $author)
        <div class="book">
            <div class="book-id">{{ $book->id }}</div>
            <div class="book-title">{{ $book->title }}</div>
            <div class="book-description">{!! $book->description !!}</div>
        </div>
    @endforeach
@endsection
