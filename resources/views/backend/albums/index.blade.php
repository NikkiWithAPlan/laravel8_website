@extends('layouts.app')

@section('content')
    <h2>Albums</h2>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary" role="button" href="{{ route('albums.create') }}">
                Add new album
            </a>
        </div>

        <div class="card-body">
            <div class="container">
                <div class="row justify-content-start">
                    @forelse ($albums as $album)
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('albums.show', $album->id) }}">
                                    <img class="card-img-top"
                                        src="/storage/album_covers/{{ $album->id }}/{{ $album->cover_image }}"
                                        alt="{{ $album->name }}">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $album->name }}</h5>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('photos.create', $album->id) }}" type="button"
                                            class="btn btn-outline-primary">
                                            Add new photo
                                        </a>
                                        <a href="{{ route('albums.show', $album->id) }}" type="button"
                                            class="btn btn-outline-primary">
                                            Edit Photos in Album
                                        </a>
                                        <a href="{{ route('albums.edit', $album->id) }}" type="button"
                                            class="btn btn-outline-primary">
                                            Edit album
                                        </a>
                                    </div>
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
                    @empty
                        <p>No albums to display</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
