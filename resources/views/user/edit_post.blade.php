@extends('user.layout')

@section('title')
Edit Post - {{ $post->title }}
@endsection

@section('content')

{{ $post }}

<form method="POST" action="{{ route('update.post', $post->id) }}">
    @csrf
    @METHOD('PUT')

    <input type="text" name="title" value="{{ $post->title }}" />
    <textarea name="description">
        {{ $post->description }}
    </textarea>
    <select name="category_id">
        @foreach($categories as $category)
        
        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? "selected" : "" }}>{{ $category->category }}</option>

        @endforeach
    </select>
    <button>Edit Post</button>
</form>

@endsection