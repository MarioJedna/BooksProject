@extends('layouts.main', ['current_menu_item' => 'homepage'])

@include('common.search')

@section('content')
    <h1>Homepage</h1>
    <p>We are the best online bookstore ever... etc.</p>

    <div id="partners"></div>

    @viteReactRefresh
    @vite('resources/js/partners.jsx')


    <div class="crime-books">
        @foreach ($crime_books as $book)
            <div class="crime-books__book">
                <h4>{{ $book->title }}</h4>
                Authors: {{ $book->authors->pluck('name')->join(', ') }}<br>
                Published by: {{ $book->publishers->pluck('name')->join(', ') }}
            </div>
        @endforeach
    </div>

    <h1>Latest books</h1>
    <img src="loading-bar.png" class="rotate" alt="" id="loader" />
    <div id="latest-books"></div>

    @vite('resources/js/latest-books.js')
@endsection
