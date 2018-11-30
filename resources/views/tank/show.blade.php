@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Tank ID:</strong> {{ $tank->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $tank->user->first_name }} {{ $tank->user->last_name }}
                </div>
                <div class="row">
                    <strong> Tank Name:</strong> {{ $tank->tank_name }}
                </div>
                <div class="row">
                    <strong> Fuel ID:</strong> {{ $tank->fuel_id }}
                </div>
                <div class="row">
                    <strong> Capacity:</strong> {{ $tank->capacity }}
                </div>


                <a href="{{ route('tank.edit', $tank->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('tank.destroy', $tank->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
