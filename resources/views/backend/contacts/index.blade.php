@extends('layouts.app')

@section('content')

    <h3>Contact details</h3>

    <hr>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-sm-7">
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $contact->title }}</th>
                                <td>{{ $contact->mobile }}</td>
                                <td>{{ $contact->email }}</td>
                                <td><a href="{{ route('contacts.edit', $contact->id) }}"
                                        class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
