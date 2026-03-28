@extends('user/layout')

@section('title')
My Posts
@endsection

@section('content')

<ul>
    @foreach($posts as $post)

    <li>
        
        <p>{{ $post->title }}</p>
        <a href="{{ route('view.post', $post->id) }}">View</a>
        <a href="{{ route('view.post', $post->id) }}">Edit</a>

    </li>

    @endforeach
</ul>

@endsection