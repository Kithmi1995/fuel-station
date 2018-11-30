@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Lubricant Sales ID:</strong> {{ $lubricantsale->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $lubricantsale->user->first_name }} {{ $lubricantsale->user->last_name }}
                </div>
                <div class="row">
                    <strong> Lubricant ID:</strong> {{ $lubricantsale->lub_id }}
                </div>

                <div class="row">
                    <strong> Date:</strong> {{ $lubricantsale->date }}
                </div>
                <div class="row">
                    <strong> Time:</strong> {{ $lubricantsale->time }}
                </div>
                <div class="row">
                    <strong> Number Of Items:</strong> {{ $lubricantsale->noi }}
                </div>

                <a href="{{ route('lubricantsale.edit', $lubricantsale->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('lubricantsale.destroy', $lubricantsale->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
