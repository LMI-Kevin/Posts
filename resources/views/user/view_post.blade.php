@extends('user/layout')

@section('title')
View Post {{ $post->title }}
@endsection

@section('content')

{{ $post }}

@endsection