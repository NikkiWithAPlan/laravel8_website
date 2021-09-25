@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8 py-4" style="margin:1rem;">
                <div class="row justify-content-center">
                    <div class="col-md-10 d-flex justify-content-center">
                        <h2 class="text-primary" style="text-align: center;">Messages</h2>
                    </div>
                    <div class="col-md-2 d-flex justify-content-start">
                        @include('frontend.signs.addNewSign')
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        @include('frontend.signs.signsList')
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
