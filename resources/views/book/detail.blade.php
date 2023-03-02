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


    @if (Auth::check())
        @foreach ($book->reviews as $review)
            <div class="comment">
                <div> User: {{ $review->user_id }} </div>
                <div> Text: {{ $review->text }} </div>
                @if (Auth::user()->role == 'admin')
                    <form action="{{ route('book.review.delete', $review->id) }}" method="post">
                        @csrf
                        @method('DELETE');
                        <button type="submit"> Delete </button>
                    </form>
                @endif
            </div>
        @endforeach
    @endif
@endsection
