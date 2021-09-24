@extends('layouts.app')

@section('content')

    <div class="card bg-transparent">

        <div class="card-body">

            <a class="btn btn-primary" role="button" href="{{ route('shows.create') }}">
                Add new show
            </a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-start">
                    @forelse ($shows as $show)
                        <div class="col-4">
                            <div class="card bg-transparent" style="width: 18rem; margin:1rem; padding:0.5rem;">
                                <div class="card-title">
                                    <a href="{{ route('shows.show', $show->id) }}">
                                        {{ $show->date }}
                                    </a>
                                    <br>
                                    <h4>{{ $show->place_name }}</h4>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No shows to display</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection
