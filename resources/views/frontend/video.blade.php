@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8" style="margin:1rem; padding:0.5rem;">
                <div class="card-body">
                    <div class="row justify-content-center">
                        @foreach ($videos as $video)
                            <div class="col-10" style="margin:1rem; padding:0.5rem;">
                                <h2 class="text-primary" style="text-align: center; margin-bottom:2rem; font-size: 32px;">
                                    {{ $video->title }}
                                </h2>
                                <div class="ratio ratio-16x9">
                                    <iframe src="{{ $video->url }}" title="YouTube video" allowfullscreen></iframe>
                                </div>
                                <div class="d-flex justify-content-center" style="margin-top:2.5rem;">
                                    <i class="bi bi-lightning" style="font-size: 2.5rem;"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection
