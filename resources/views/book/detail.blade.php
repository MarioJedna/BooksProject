@extends('layouts.main')

@section('content')
    <h1>{{ $book->title }}</h1>
    <img src="{{ $book->image }}" alt="">
    <div>{{ $book->language }}</div>
    <div>{{ $book->isbn }}</div>
    <div>{{ $book->format }}</div>
    <div>{{ $book->edition }}</div>
    <div>{{ $book->pages }}</div>
    <div>{!! $book->description !!}</div>

    @auth
        <form action="{{ route('book.review', $book->id) }}" method="post">
            @csrf
            Review: <input type="text" name="text" id="">
            <button type="submit">Submit</button>
        </form>
    @endauth

    @foreach ($book->reviews as $review)
        <div class="comment">
            <div>User: {{ $review->user_id }}</div>
            <div>Text: {{ $review->text }}</div>
        </div>
    @endforeach
@endsection
