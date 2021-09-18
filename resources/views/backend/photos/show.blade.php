@extends('layouts.app')

@section('content')
	<h3>{{ $photo->title  }}</h3>
	<a class="btn btn-outline-primary" role="button" href="{{ route('albums.show', $photo->album_id) }}">Back to gallery</a>
	<hr>
	
	<img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}" style="width:80%;">

	<br><br>

	<form method="post" action="{{ route('photos.destroy', $photo->id) }}">
		@method('DELETE')
		@csrf

		<button type="submit" class="btn btn-outline-danger">
			Delete - {{ $photo->title }}
		</button>
	</form>
	<hr>
	<small>Size: {{$photo->size}}</small>
@endsection