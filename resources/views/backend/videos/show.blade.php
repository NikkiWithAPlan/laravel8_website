@extends('layouts.app')

@section('content')

    <h3>{{ $video->title }}</h3>
    <div class="card bg-transparent">
        <div class="card-body">
            <a class="btn btn-primary" role="button" href="{{ route('videos.create') }}">
                Add new video
            </a>
        </div>
        <hr>
        <div class="card-body">
            <h5 class="card-title">{{ $video->title }}</h5>
            <div class="ratio ratio-16x9">
                <iframe src="{{ $video->url }}" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>

        <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-primary">Edit</a>
    </div>


@endsection
