@extends('layouts.app')

@section('content')
<a href="{{ url('/post/create') }}" class="btn btn-primary">Add Post</a>
<div class="posts">
	@foreach ($posts as $post)
		<a href="{{ url( '/post/'.$post->id ) }}">
			<div class="post">
				<img src="{{ url('img/user.png') }}" alt="user_img">
				<h3>{{ $post->subject }}
					<small>
						<p>
							{{ str_limit($post->body, 20) }}
						</p>
					</small>
				</h3>
				<div class="date-created pull-right">
					{{ $post->created_at->diffForHumans() }}
				</div>
			</div>
		</a>
	@endforeach
</div>
@endsection