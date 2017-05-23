@extends('layouts.app')

@section('content')
<a href="{{ url('/home') }}" class="btn btn-primary">Chat</a>
<a href="{{ url('/posts') }}" class="btn btn-primary">Post</a>
@endsection
