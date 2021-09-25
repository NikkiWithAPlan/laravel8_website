@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8 py-4" style="margin:1rem;">
                <div class="row justify-content-center">
                    <div class="col-md-10 d-flex justify-content-center">
                        <h2 class="text-primary" style="text-align: center;">MESSAGES</h2>
                    </div>
                    <div class="col-md-2 d-flex justify-content-start">
                        @include('frontend.signs.addNewSign')
                    </div>
                </div>
                @if (session('success'))
                <div class="row justify-content-center">
                    <div class="col-md-10 pt-4">
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                            <i class="bi bi-patch-check"></i>
                            <div class="ms-2">
                                <strong>Success! </strong> Your message has been successfully saved.
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card-body">
                    <div class="container">
                        @include('frontend.signs.signsList')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
