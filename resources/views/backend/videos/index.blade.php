@extends('layouts.app')

@section('content')

    <h3>Videos</h3>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary" role="button" href="{{ route('videos.create') }}">
                Add new video
            </a>
        </div>

        <div class="card-body">
            <div class="container">
                <div class="row justify-content-start">
                    @forelse($videos as $video)
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $video->title }}</h5>
                                    <div class="ratio ratio-16x9">
                                        <iframe src="{{ $video->url }}" title="YouTube video" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-primary">Edit</a>
                                <form method="post" action="{{ route('videos.destroy', $video->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete - {{ $video->title }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>No videos to display</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection
