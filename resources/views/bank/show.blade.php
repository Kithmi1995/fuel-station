@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Deposit ID:</strong> {{ $bankDeposit->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $bankDeposit->user->first_name }} {{ $bankDeposit->user->last_name }}
                </div>
                <div class="row">
                    <strong>Date</strong> {{ $bankDeposit->date }}
                </div>
                <div class="row">
                    <strong>Amount:</strong> {{ $bankDeposit->amount }}
                </div>
                <div class="row">
                    <strong>Bank Name:</strong> {{ $bankDeposit->b_name }}
                </div>

                <a href="{{ route('bank.edit', $bankDeposit->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('bank.destroy', $bankDeposit->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>



            </div>
        </div>
    </div>
@endsection
