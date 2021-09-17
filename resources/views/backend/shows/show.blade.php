@extends('layouts.app')

@section('content')

    <h1>{{ $show->date }}</h1>

    <hr>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-sm-6">
                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Title</h5> {{ $show->title }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Date</h5> {{ $show->date }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Address</h5> {{ $show->address }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Place name</h5> {{ $show->place_name }}
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Link</h5> {{ $show->link ? $show->link : '-' }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Ticket</h5> {{ $show->ticket ? $show->ticket : '-' }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Start time</h5> {{ $show->start_time ? $show->start_time : '-' }}
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Additional info</h5>
                            {{ $show->additional_info ? $show->additional_info : '-' }}
                        </li>
                    </ul>

                </div>
            </div>

            <div class="card-body">
                <div class="column">
                    <a href="{{ route('shows.edit', $show->id) }}" class="btn btn-primary">Edit</a>
                    <form method="post" action="{{ route('shows.destroy', $show->id) }}">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger btn-icon">
                          Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
