@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Fuel ID</th>
                    <th>Fuel Name</th>
                    <th>Amount(Liters)</th>
                    <th>Amount(RS)</th>
                    <th>Paid Method</th>



                </tr>
                @foreach($fuelpurchases as $fuelpurchase)
                    <tr>
                        <td>
                            <a href="{{ route('fuelpurchase.show', $fuelpurchase->id) }}">
                                {{ $fuelpurchase->id }}
                            </a>

                        </td>
                        <td>{{ $fuelpurchase->user->first_name }}</td>
                        <td>{{ $fuelpurchase->date }}</td>
                        <td>{{ $fuelpurchase->fuel_id }}</td>
                        <td>{{ $fuelpurchase->fuel_name }}</td>
                        <td>{{ $fuelpurchase->f_liter }}</td>
                        <td>{{ $fuelpurchase->f_rs }}</td>
                        <td>{{ $fuelpurchase->p_method }}</td>


                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
