@extends('layouts.app')

@section('content')

    <div class="card bg-transparent" style="margin:1rem; padding:0.5rem;">
        <h2 class="card-title">Guestbook</h2>
        <div class="card-body">
            <div class="container">
                @forelse ($signatures as $signature)
                    <div class="row justify-content-start">
                        <div class="card bg-transparent" style="margin:1rem; padding:0.5rem;">
                            <div class="card-body">
                                <h4>{{ $signature->name }}</h4>
                                <br>
                                <h4>{{ $signature->body }}</h4>
                                <br>
                                <h4>{{ $signature->created_at }}</h4>
                                <hr>
                                <form method="post" action="{{ route('signatures.destroy', $signature->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete this post
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No post to display</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection
