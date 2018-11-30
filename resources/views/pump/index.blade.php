@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Pump ID</th>
                    <th>Added User</th>
                    <th>Pump Name</th>
                    <th>Fuel ID</th>
                    <th>Tank ID</th>

                </tr>
                @foreach($pumps as $pump)
                    <tr>
                        <td>
                            <a href="{{ route('pump.show', $pump->id) }}">
                                {{ $pump->id }}
                            </a>

                        </td>
                        <td>{{ $pump->user->first_name }}</td>
                        <td>{{ $pump->pump_name }}</td>
                        <td>{{ $pump->fuel_id }}</td>
                        <td>{{ $pump->tank_id }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
