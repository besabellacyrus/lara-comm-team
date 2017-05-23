@extends('layouts.app')

@section('content')
<form action="/post" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="subject">Team</label>
		<select class="form-control" name="team_id">
			<option>Select Team</option>
			@foreach ($teams as $team)
				<option value="{{ $team->id }}">{{ $team->title }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="subject">Subject</label>
		<input type="text" class="form-control" id="subject" name="subject">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" id="body" name="body"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Publish">
	</div>
</form>
@endsection