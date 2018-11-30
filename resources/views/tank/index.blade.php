@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Tank ID</th>
                    <th>Added User</th>
                    <th>Tank Name</th>
                    <th>Fuel ID</th>
                    <th>Capacity</th>


                </tr>
                @foreach($tanks as $tank)
                    <tr>
                        <td>
                            <a href="{{ route('tank.show', $tank->id) }}">
                                {{ $tank->id }}
                            </a>

                        </td>
                        <td>{{ $tank->user->first_name }}</td>
                        <td>{{ $tank->tank_name }}</td>
                        <td>{{ $tank->fuel_id }}</td>
                        <td>{{ $tank->capacity }}</td>


                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
