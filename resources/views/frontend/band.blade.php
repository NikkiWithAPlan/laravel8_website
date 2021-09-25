@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-6" style="margin:1rem; padding:0.5rem;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover align-middle"
                            style="table-layout: fixed; color: #414141;">
                            <thead class="d-flex justify-content-center table-dark">
                                <h2 class="text-primary" style="text-align: center;">
                                    FELÁLLÁS
                                </h2>
                            </thead>
    
                            <tbody>
                                @foreach ($members as $member)
                                    <tr class="d-flex justify-content-center">
                                        <th class="col-md-5 d-flex justify-content-end align-items-center">
                                            <p class="text-end text-wrap">
                                                {{ $member->member_name }}
                                            </p>
                                        </th>
                                        <th class="col-md-1 d-flex justify-content-center">
                                            <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                                        </th>
                                        <th class="col-md-6 d-flex justify-content-start align-items-center">
                                            <p class="text-start text-wrap">
                                                {{ $member->instrument }}
                                            </p>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
    
            <div class="card card-bg shadow-sm col-md-8" style="margin:1rem; padding:0.5rem;">
                <div class="card-body">
                    <div class="text-primary">
                        {!! $bandtext->text !!}
                    </div>
                </div>
            </div>
    
        </div>
    </div>

@endsection
