@extends('layouts.app')

@section('content')
	<h1>{{ $album->name  }}</h1>
	<a class="button secondary" href="/album">Go back</a>
	<a class="button" href="/photos/create/{{$album->id}}">Upload photo to album </a>
	<hr>

	<form method="post" action="{{ route('albums.destroy', $album->id) }}">
		@method('DELETE')
		@csrf

		<button type="submit" class="btn btn-danger btn-icon">
		  Delete
		</button>
	</form>

	@if(count($album->photos) > 0)
		<?php
		$colcount = count($album->photos);
		$i = 1;
		?>
		<div id="photos">
			<div class="row text-center">
				@foreach($album->photos as $photo)
					@if($i == $colcount)
						<div class="medium-4 columns end">
							<a href="/photos/{{$photo->id}}">
								<img class="thumbnail"
									 src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
									 alt="{{$photo->title}}">
							</a>
							<br/>
							<h4>{{$photo->title}}</h4>
							@else
								<div class="medium-4 columns">
									<a href="/photos/{{$photo->id}}">
										<img class="thumbnail"
											 src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
											 alt="{{$photo->title}}">
									</a>
									<br/>
									<h4>{{$photo->title}}</h4>
									@endif
									@if($i % 3 == 0)
								</div></div>
						<div class="row text-center">
							@else
						</div>
					@endif
					<?php $i++; ?>
				@endforeach
			</div>
		</div>
	@else
		<p>No photos to display</p>
	@endif

@endsection