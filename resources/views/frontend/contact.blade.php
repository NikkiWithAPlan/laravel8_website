@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card card-bg shadow-sm col-md-8" style="margin:1rem; padding:0.5rem;">
                <div class="card-body">

                    <h2 class="text-primary" style="text-align: center; margin-bottom:2rem; font-size: 32px;">
                        {{ $contact->title }}
                    </h2>
                    <div class="d-flex justify-content-center">
                        <h3 class="text-primary" style="margin-bottom:1rem;">
                            Szedlják János
                        </h3>
                    </div>
                    
                    <table class="table table-borderless table-hover align-middle">
                        <tbody>
                            <tr class="d-flex justify-content-center">
                                <td class="col-md-4 d-flex justify-content-end align-items-center">
                                    <h5>Mobile</h5>
                                </td>
                                <td class="col-md-2 d-flex justify-content-center">
                                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                                </td>
                                <td class="col-md-5 d-flex justify-content-start align-items-center">
                                    <h5>
                                        {{ $contact->mobile }}
                                    </h5>
                                </td>
                            </tr>
                            <tr class="d-flex justify-content-center">
                                <td class="col-md-4 d-flex justify-content-end align-items-center">
                                    <h5>Email</h5>
                                </td>
                                <td class="col-md-2 d-flex justify-content-center">
                                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                                </td>
                                <td class="col-md-5 d-flex justify-content-start align-items-center">
                                    <h5>
                                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

@endsection
