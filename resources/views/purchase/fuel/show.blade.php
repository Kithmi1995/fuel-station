@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Fuel purchase ID:</strong> {{ $fuelpurchase->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $fuelpurchase->user?$fuelpurchase->user->first_name:'' }} {{ $fuelpurchase->user?$fuelpurchase->user->last_name:'' }}
                </div>
                <div class="row">
                    <strong> Fuel ID:</strong> {{ $fuelpurchase->fuel_id }}
                </div>
                <div class="row">
                    <strong> Fuel Name:</strong> {{ $fuelpurchase->fuel_name }}
                </div>
                <div class="row">
                    <strong> Amount(Liters):</strong> {{ $fuelpurchase->f_liter }}
                </div>
                <div class="row">
                    <strong> Amount(RS):</strong> {{ $fuelpurchase->f_rs }}
                </div>
                <div class="row">
                    <strong> Paid Method:</strong> {{ $fuelpurchase->p_method }}
                </div>

                <a href="{{ route('fuelpurchase.edit', $fuelpurchase->id or 0) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('fuelpurchase.destroy', $fuelpurchase->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
