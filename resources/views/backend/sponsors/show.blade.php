@extends('layouts.app')

@section('content')
    <h1>{{ $sponsor->title }}</h1>
    <div class="card">
        <div class="card-body">

            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-2">
                        <a class="btn btn-outline-primary" href="{{ route('sponsors.index') }}">Go back</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="card-body">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">

                        <img class="card-img-top" src="/storage/sponsor_logo/{{ $sponsor->logo }}"
                            alt="{{ $sponsor->title }}">

                        <h4 class="card-title">{{ $sponsor->title }}</h4>
                        <h5 class="card-body">Link - {{ $sponsor->url }}</h5>

                        <div class="btn-group" role="group">
                            <a href="{{ route('sponsors.show', $sponsor->id) }}" type="button"
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
        </div>
    </div>
@endsection
