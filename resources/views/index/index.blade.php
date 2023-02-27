@extends('layouts.main', ['current_menu_item' => 'homepage'])

@section('content')
    <h1>Homepage</h1>
    <p>We are the best online bookstore ever... etc.</p>

    <div id="partners"></div>
    @viteReactRefresh
    @vite('resources/js/partners.jsx')
@endsection
