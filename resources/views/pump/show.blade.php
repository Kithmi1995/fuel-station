@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Pump ID:</strong> {{ $pump->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $pump->user->first_name }} {{ $pump->user->last_name }}
                </div>
                <div class="row">
                    <strong>Pump Name</strong> {{ $pump->pump_name }}
                </div>
                <div class="row">
                    <strong>  Fuel ID:</strong> {{ $pump->fuel_id }}
                </div>
                <div class="row">
                    <strong> Tank ID:</strong> {{ $pump->tank_id }}
                </div>

                <a href="{{ route('pump.edit', $pump->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('pump.destroy', $pump->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>



            </div>
        </div>
    </div>
@endsection
