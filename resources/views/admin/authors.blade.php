@extends('layouts.admin')

@section('content')
    @foreach ($authors as $author)
        <div class="author">
            <div class="author-id">{{ $author->id }}</div>
            <div class="author-name">{{ $author->name }}</div>
            <div class="author-bio">{!! $author->bio !!}</div>
        </div>
    @endforeach
@endsection
