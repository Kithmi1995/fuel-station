@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Pumper ID:</strong> {{ $pumper->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $pumper->user->first_name }} {{ $pumper->user->last_name }}
                </div>
                <div class="row">
                    <strong> Pumper NIC:</strong> {{ $pumper->nic }}
                </div>
                <div class="row">
                    <strong> Pumper First Name:</strong> {{ $pumper->first }}
                </div>
                <div class="row">
                    <strong> Pumper Last Name:</strong> {{ $pumper->last }}
                </div>
                <div class="row">
                    <strong> Address:</strong> {{ $pumper->address }}
                </div>
                <div class="row">
                    <strong> Contact Number:</strong> {{ $pumper->contact }}
                </div>
                <div class="row">
                    <strong> Date Of Birth:</strong> {{ $pumper->dob }}
                </div>

                <a href="{{ route('pumper.edit', $pumper->id) }}" class="btn btn-primary">edit</a>



                <form action="{{ route('pumper.destroy', $pumper->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>



            </div>
        </div>
    </div>
@endsection
