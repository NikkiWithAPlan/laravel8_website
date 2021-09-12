@extends('layouts.app')

@section('content')

<h3>Edit {{ $bandMember->member_name }} - {{ $bandMember->instrument }}</h3>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('band.update', $bandMember->id) }}">
                    @method('PUT')
                    @csrf

                    <label for="Member_Name">Member Name</label>
                    <input type="text" id="member_name" name="member_name">
                    <br>
		            <input class="btn btn-primary" type="submit" name="submit" value="Update">

                </form>
            </div>
        </div>
    </div>
</div>

@endsection