@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8 py-4 " style="margin:1rem;">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach ($sponsors as $sponsor)
                                <div class="col-4 py-4">
                                    <a  class="d-flex justify-content-center" href="{{ $sponsor->url }}" target="_blank">
                                        <img class="img" src="/storage/sponsor_logo/{{ $sponsor->logo }}"
                                            alt="{{ $sponsor->title }}" height="75">
                                    </a>
                                    <i class="bi bi-lightning d-flex justify-content-center mt-2" style="font-size: 1.5rem;"></i>
                                    <div class="text-center text-wrap mt-1">
                                        <h5>{{ $sponsor->title }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
