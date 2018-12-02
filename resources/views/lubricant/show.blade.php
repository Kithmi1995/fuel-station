@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <strong> Lubricant code:</strong> {{ $lubricant->code }}
                </div>

                <div class="row">
                    <strong> Type:</strong> {{ $lubricant->type }}
                </div>
                <div class="row">
                    <strong> Unit Price:</strong> {{ $lubricant->price }}
                </div>
                <div class="row">
                    <strong> Unit Price Date:</strong> {{ $lubricant->price_date }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $lubricant->user->first_name }} {{ $lubricant->user->last_name }}
                </div>

                <a href="{{ route('lubricant.index', $lubricant->id) }}" class="btn btn-primary">back</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                    {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                {{--<form action="{{ route('fuel.destroy', $fuel->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>
--}}
                

            </div>
        </div>
    </div>
@endsection
