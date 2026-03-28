@extends('user.layout')

@section('title')
My Posts
@endsection

@section('content')

<ul>
    @foreach($posts as $post)

    <li>
        
        <p>{{ $post->title }}</p>
        <a href="{{ route('view.post', $post->id) }}">View</a>
        <a href="{{ route('edit.post', $post->id) }}">Edit</a>
        <form method="POST" action="{{ route('delete.post', $post->id) }}">
            @csrf
            @METHOD('DELETE')

            <button>Delete</button>
        </form>
    </li>

    @endforeach
</ul>

@endsection