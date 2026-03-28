@extends('user.layout')

@section('title')
Add Post
@endsection

@section('content')

<form method="POST" action="{{ route('store.post') }}">
    @csrf
    <input type="text" name="title" placeholder="Title" />
    <textarea name="description" placeholder="Description"></textarea>
    <select name="category_id">
        <option selected disabled>-- Category --</option>
        @foreach($categories as $category)
            <option value={{ $category->id }}>{{ $category->category }}</option>
        @endforeach
    </select>
    <button>Add Post</button>
</form>

@endsection