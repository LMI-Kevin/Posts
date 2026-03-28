@extends('user.layout')

@section('title')
Dashboard
@endsection

@section('content')

<a href="{{ route('add.post') }}">Add Post</a>

<ul>
@foreach($posts as $post)

<li>
    <a href="{{ route('view.post', $post->id) }}">{{ $post->title }}</a>
</li>

@endforeach
</ul>

@endsection