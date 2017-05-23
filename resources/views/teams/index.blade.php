@extends('layouts.app')

@section('content')
	<small><i>Create a team.</i></small>
	<form action="{{ url('/team/store') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group" >
			<label for="title">Team Title</label>
			<input type="text" id="title" class="form-control" name="title" required="">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		</div>
	</form>
@endsection