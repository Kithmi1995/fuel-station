@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Fuel ID:</strong> {{ $fuel->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $fuel->user->first_name }} {{ $fuel->user->last_name }}
                </div>
                <div class="row">
                    <strong> Type:</strong> {{ $fuel->type }}
                </div>
                <div class="row">
                    <strong> Unit Price:</strong> {{ $fuel->price }}
                </div>
                <div class="row">
                    <strong> Unit Price Date:</strong> {{ $fuel->price_date }}
                </div>

                <a href="{{ route('fuel.edit', $fuel->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                    {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('fuel.destroy', $fuel->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>

                

            </div>
        </div>
    </div>
@endsection
