@extends('layouts.app')

@section('content')

    <h3>Band Text</h3>

    <hr>

    <div class="row">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">

                        <div>
                            {!! $bandText->text !!}
                        </div>
                        <td><a href="{{ route('band_details.edit', $bandText->id) }}" class="btn btn-primary">Edit</a></td>

                </div>
            </div>
        </div>
    </div>


@endsection