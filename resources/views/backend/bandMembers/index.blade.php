@extends('layouts.app')

@section('content')

    <h3>Band members</h3>

    <hr>

    <div class="card bg-transparent">
      <div class="row no-gutters">
          <div class="col-sm-7">
                <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Instrument</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bandMembers as $bandMember)
                                <tr>
                                    <td>{{ $bandMember->member_name }}</th>
                                    <td>{{ $bandMember->instrument }}</td>
                                    <td><a href="{{ route('band.edit',$bandMember->id) }}" class="btn btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>


@endsection