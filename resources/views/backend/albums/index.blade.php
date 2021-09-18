@extends('layouts.app')

@section('content')
    <div class="card-body">

        <a class="btn btn-primary" role="button" href="{{ route('albums.create') }}">
            Add new album
        </a>
    </div>

	<div class="card-body">

    @if (count($albums) > 0)
        <?php
        $colcount = count($albums);
        $i = 1;
        ?>
        <div id="albums">
            <div class="row text-center">
                @foreach ($albums as $album)
                    @if ($i == $colcount)
                        <div class="medium-4 columns end">
                            <a href="/albums/{{ $album->id }}">
                                <img class="thumbnail"
                                    src="/storage/album_covers/{{ $album->id }}/{{ $album->cover_image }}"
                                    alt="{{ $album->name }}" style="width:30%;">
                            </a>
                            <br />
                            <h4>{{ $album->name }}</h4>
                        @else
                            <div class="medium-4 columns">
                                <a href="/albums/{{ $album->id }}">
                                    <img class="thumbnail"
                                        src="/storage/album_covers/{{ $album->id }}/{{ $album->cover_image }}"
                                        alt="{{ $album->name }}" style="width:30%;">
                                </a>
                                <br />
                                <h4>{{ $album->name }}</h4>
                    @endif
                    @if ($i % 3 == 0)
					</div>
				</div>
				<div class="row text-center">
					@else
				</div>
    				@endif
    	<?php $i++; ?>
    			@endforeach
    </div>
    </div>
@else
    <p>No albums to display</p>
    @endif

	</div>

    {{-- <h3>Albums</h3>
	@foreach ($albums as $album)
		$album->name
	@endforeach --}}
@endsection
