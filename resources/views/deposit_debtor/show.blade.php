@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Debtor Deposit ID:</strong> {{ $depositDebtor->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $depositDebtor->user->first_name }} {{ $depositDebtor->user->last_name }}
                </div>
                <div class="row">
                    <strong> Date:</strong> {{ $depositDebtor->date }}
                </div>
                <div class="row">
                    <strong> Debtor ID:</strong> {{ $depositDebtor->deb_id }}
                </div>
                <div class="row">
                    <strong> Amount Received:</strong> {{ $depositDebtor->amount }}
                </div>

                <a href="{{ route('deposit_debtor.edit', $depositDebtor->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('deposit_debtor.destroy', $depositDebtor->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
