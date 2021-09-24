@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-9 py-4" style="margin:2h2rem;">
                <div class="card-body">
                    <div class="container">
                        <h2 class="text-primary">{{ $album->name }}</h2>
                        <a href="{{ route('albumsPage') }}">Go back</a>
                        <hr>
                        <div class="row justify-content-center">

                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($album->photos as $photo)
                                        @if ($loop->first)
                                            <div class="carousel-item active d-flex justify-content-center"
                                                style="min-height : 300px;">
                                                <img class="d-block img-fluid"
                                                    src="/storage/photos/{{ $album->id }}/{{ $photo->photo }}"
                                                    alt="{{ $album->name }}">
                                            </div>
                                        @else
                                            <div class="carousel-item d-flex justify-content-center"
                                                style="min-height : 300px;">
                                                <img class="d-block img-fluid"
                                                    src="/storage/photos/{{ $album->id }}/{{ $photo->photo }}"
                                                    alt="{{ $album->name }}">
                                            </div>
                                        @endif

                                    @endforeach

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
