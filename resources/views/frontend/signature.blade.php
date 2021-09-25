@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8 py-4" style="margin:1rem;">
                <h2 class="card-title text-primary" style="text-align: center;">Messages</h2>
                <div class="card-body">
                    <div class="container">

                        <ul class="list-group list-group-flush">
                            @foreach ($signatures as $signature)
                                <li class="list-group-item p-3" style="background:#cacaca;">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 d-flex justify-content-center">
                                            <h5>{{ $signature->name }}</h5>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center">
                                            <small>{{ $signature->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                    <p class="mb-4">{{ $signature->body }}</p>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
