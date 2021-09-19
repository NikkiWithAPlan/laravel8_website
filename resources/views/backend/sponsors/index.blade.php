@extends('layouts.app')

@section('content')
    <h2>Sponsors</h2>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary" role="button" href="{{ route('sponsors.create') }}">
                Add new sponsor
            </a>
        </div>

        <div class="card-body">
            <div class="container">
                <div class="row justify-content-start">
                    @forelse ($sponsors as $sponsor)
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('sponsors.show', $sponsor->id) }}">
                                    <img class="card-img-top"
                                        src="/storage/sponsor_logo/{{ $sponsor->logo }}"
                                        alt="{{ $sponsor->title }}">
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">{{ $sponsor->title }}</h4>
                                    <h5 class="card-body">Link - {{ $sponsor->url }}</h5>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('sponsors.edit', $sponsor->id) }}" type="button"
                                            class="btn btn-outline-primary">
                                            Edit sponsor
                                        </a>
                                        <form method="post" action="{{ route('sponsors.destroy', $sponsor->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">
                                                Delete - {{ $sponsor->title }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No sponsor to display</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
