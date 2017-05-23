@extends('layouts.app')

@section('content')
	<a href="" class="btn btn-primary">Chat</a>
	<a href="{{ url('/posts') }}" class="btn btn-primary">Post</a>
	<div class="team-header">
		<h3>{{ $team->title }}
			<small>
				@foreach ($team->users as $user)
					<span>{{ $user->name }},</span>
				@endforeach
				<a href="/team/addUser"><i class="fa fa-plus-circle"></i></a>
			</small>
		</h3>
	</div>
	<div class="comment-box">
		@foreach ($team->comments as $comment)
			@if (Auth::id() == $comment->user->id)
				<div class="comment-div rtl">
					<p> 
						{{ $comment->body }} 
						<span class="promote-to" title="Promote to post?">
							<a href="{{ url('/promote/'.$team->id) }}">
								<i class="fa fa-sticky-note-o"></i>
							</a>
						</span>
					</p>
						<div class="timestamp">{{ $comment->created_at->diffForHumans() }}</div>
				</div>
			@else
				<div class="comment-div">
					<img src="{{ asset('img/user.png') }}" alt="image">
					<p> 
						{{ $comment->body }}
					</p>
						<div class="timestamp">by {{ $comment->user->name }}, {{ $comment->created_at->diffForHumans() }}</div>
				</div>
			@endif
			
		@endforeach
	</div>
	<form action="{{ url('comment/'.$team->id.'/store') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<textarea class="form-control" name="body"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Send</button>
		</div>
	</form>
@endsection
