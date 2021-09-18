@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
    <div class="card">
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-2">
                        <a class="btn btn-outline-primary" href="{{ route('albums.index') }}">Go back</a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-outline-primary" href="{{ route('photos.create', $album->id) }}">
							Upload photo to - {{ $album->name }}
						</a>
                    </div>
                    <div class="col-2">
                        <form method="post" action="{{ route('albums.destroy', $album->id) }}">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-outline-danger">
                                Delete - {{ $album->name }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="card-body">
            <div class="container">
                <div class="row justify-content-start">
                    @forelse ($album->photos as $photo)
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('photos.show', $photo->id) }}">
                                    <img class="card-img-top"
                                        src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}"
                                        alt="{{ $photo->title }}">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $photo->title }}</h5>
                                    <form method="post" action="{{ route('photos.destroy', $photo->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">
                                            Delete - {{ $photo->title }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No photos to display</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection