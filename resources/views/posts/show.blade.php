@extends('layouts.app')

@section('content')
<div class="posts">
	<div class="post">
		<img src="{{ url('img/user.png') }}" alt="user_img">
		<h3>{{ $post->subject }}
			<small>
				<p>
					{{ $post->body }}
				</p>
			</small>
		</h3>
		<div class="date-created pull-right">
			{{ $post->created_at->diffForHumans() }}
		</div>
	</div>
	<div class="comment-box">
		
	</div>
	<form action="{{ url('comment/'.$post->id.'/store') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<textarea class="form-control" name="body"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Send</button>
		</div>
	</form>
</div>

@endsection