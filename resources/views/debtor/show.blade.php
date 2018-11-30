@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Debtor ID:</strong> {{ $debtor->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $debtor->user->first_name }} {{ $debtor->user->last_name }}
                </div>
                <div class="row">
                    <strong> Debtor Name/Company Name:</strong> {{ $debtor->d_name }}
                </div>
                <div class="row">
                    <strong> Address:</strong> {{ $debtor->address }}
                </div>
                <div class="row">
                    <strong> Contact Number:</strong> {{ $debtor->contact }}
                </div>
                <div class="row">
                    <strong> Email:</strong> {{ $debtor->email }}
                </div>

                <a href="{{ route('debtor.edit', $debtor->id) }}" class="btn btn-primary">edit</a>



                <form action="{{ route('debtor.destroy', $debtor->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>



            </div>
        </div>
    </div>
@endsection
