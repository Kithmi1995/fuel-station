@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Lubricant purchase ID:</strong> {{ $lubricantpurchase->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $lubricantpurchase->user->first_name }} {{ $lubricantpurchase->user->last_name }}
                </div>
                <div class="row">
                    <strong> Lubricant ID:</strong> {{ $lubricantpurchase->lub_id }}
                </div>
                <div class="row">
                    <strong> Lubricant Name:</strong> {{ $lubricantpurchase->lub_name }}
                </div>
                <div class="row">
                    <strong> Amount(Liters):</strong> {{ $lubricantpurchase->l_liter }}
                </div>
                <div class="row">
                    <strong> Amount(RS):</strong> {{ $lubricantpurchase->l_rs }}
                </div>
                <div class="row">
                    <strong> Paid Method:</strong> {{ $lubricantpurchase->p_method }}
                </div>

                <a href="{{ route('lubricantpurchase.edit', $lubricantpurchase->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('lubricantpurchase.destroy', $lubricantpurchase->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
