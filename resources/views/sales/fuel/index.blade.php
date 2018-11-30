@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Fuel Sales ID</th>
                    <th>Pump ID</th>
                    <th>Added User</th>
                    <th>Pumper ID</th>
                    <th>Closing Meter Reading</th>
                    <th>Starting Time</th>
                    <th>Ending Time</th>
                    <th>Date</th>
                    <th>Debtor Sales</th>
                    <th>Credit Card Sales</th>
                    <th>Shortages</th>

                </tr>
                @foreach($fuelsales as $fuelsale)
                    <tr>
                        <td>
                            <a href="{{ route('fuelsale.show', $fuelsale->id) }}">
                                {{ $fuelsale->id }}
                            </a>

                        </td>
                        <td>{{ $fuelsale->pump_id }}</td>
                        <td>{{ $fuelsale->user->first_name }}</td>
                        <td>{{ $fuelsale->pumper_id }}</td>
                        <td>{{ $fuelsale->close }}</td>
                        <td>{{ $fuelsale->s_time }}</td>
                        <td>{{ $fuelsale->e_time }}</td>
                        <td>{{ $fuelsale->s_date }}</td>
                        <td>{{ $fuelsale->d_sale }}</td>
                        <td>{{ $fuelsale->c_sale }}</td>
                        <td>{{ $fuelsale->shortage }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
