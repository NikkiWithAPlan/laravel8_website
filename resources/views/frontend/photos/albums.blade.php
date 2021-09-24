@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-10 py-4" style="margin:1rem;">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            @forelse ($albums as $album)
                                <div class="col-md-4 p-5">
                                    <a class="d-flex justify-content-center"
                                        href="{{ route('albumsPage.getAlbum', $album->id) }}">
                                        <img class="thumbnail"
                                            src="/storage/album_covers/{{ $album->id }}/{{ $album->cover_image }}"
                                            alt="{{ $album->name }}" width="250">
                                    </a>
                                    <i class="bi bi-lightning d-flex justify-content-center mt-2" style="font-size: 1.5rem;"></i>
                                    <h5 class="text-center text-wrap mt-1">{{ $album->name }}</h5>
                                </div>
                            @empty
                                <p>No albums to display</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
