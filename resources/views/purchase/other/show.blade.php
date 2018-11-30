@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <strong> Other purchase ID:</strong> {{ $otherpurchase->id }}
                </div>
                <div class="row">
                    <strong> Added by:</strong> {{ $otherpurchase->user->first_name }} {{ $otherpurchase->user->last_name }}
                </div>
                <div class="row">
                    <strong> Purchase Item:</strong> {{ $otherpurchase->lub_id }}
                </div>
                <div class="row">
                    <strong> Amount(RS):</strong> {{ $otherpurchase->l_rs }}
                </div>
                <div class="row">
                    <strong> Paid Method:</strong> {{ $otherpurchase->method }}
                </div>

                <a href="{{ route('otherpurchase.edit', $otherpurchase->id) }}" class="btn btn-primary">edit</a>

                {{--<form action="{{ route('fuel.edit', $fuel->id) }}" method="get">--}}
                {{--<input type="submit" value="edit">--}}
                {{--</form>--}}

                <form action="{{ route('otherpurchase.destroy', $otherpurchase->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>


            </div>
        </div>
    </div>
@endsection
