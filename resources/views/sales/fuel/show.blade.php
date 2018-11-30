@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Sales ID:</strong> {{ $fuelsale->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $fuelsale->user->first_name }} {{ $fuelsale->user->last_name }}
                </div>
                <div class="row">
                    <strong> Pump ID:</strong> {{ $fuelsale->pump_id }}
                </div>
                <div class="row">
                    <strong> Pumper ID:</strong> {{ $fuelsale->pumper_id }}
                </div>
                <div class="row">
                    <strong> Closing Meter Reading:</strong> {{ $fuelsale->close }}
                </div>
                <div class="row">
                    <strong> Starting Time:</strong> {{ $fuelsale->s_time }}
                </div>
                <div class="row">
                    <strong> Ending Time:</strong> {{ $fuelsale->e_time }}
                </div>
                <div class="row">
                    <strong> Date:</strong> {{ $fuelsale->s_date }}
                </div>
                <div class="row">
                    <strong> Debtor Sales:</strong> {{ $fuelsale->d_sale }}
                </div>
                <div class="row">
                    <strong> Credit Card Sales:</strong> {{ $fuelsale->c_sale }}
                </div>
                <div class="row">
                    <strong>Shortage:</strong> {{ $fuelsale->e_time }}
                </div>

                <a href="{{ route('fuelsale.edit', $fuelsale->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('fuelsale.destroy', $fuelsale->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
