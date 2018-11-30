@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Lubricant Sales ID</th>
                    <th>Added User</th>
                    <th>Lubricant ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Number Of Items Time</th>

                </tr>
                @foreach($lubricantsales as $lubricantsale)
                    <tr>
                        <td>
                            <a href="{{ route('lubricantsale.show', $lubricantsale->id) }}">
                                {{ $lubricantsale->id }}
                            </a>

                        </td>

                        <td>{{ $lubricantsale->user->first_name }}</td>
                        <td>{{ $lubricantsale->lub_id }}</td>
                        <td>{{ $lubricantsale->date }}</td>
                        <td>{{ $lubricantsale->time }}</td>
                        <td>{{ $lubricantsale->noi }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
