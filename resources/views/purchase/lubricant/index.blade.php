@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Lubricant ID</th>
                    <th>Lubricant Name</th>
                    <th>Amount(Liters)</th>
                    <th>Amount(RS)</th>
                    <th>Paid Method</th>
                </tr>

                @foreach($lubricantpurchases as $lubricantpurchase)
                    <tr>
                        <td>
                            <a href="{{ route('lubricantpurchase.show', $lubricantpurchase->id) }}">
                                {{ $lubricantpurchase->id }}
                            </a>

                        </td>
                        <td>{{ $lubricantpurchase->user->first_name }}</td>
                        <td>{{ $lubricantpurchase->date }}</td>
                        <td>{{ $lubricantpurchase->lub_id }}</td>
                        <td>{{ $lubricantpurchase->lub_name }}</td>
                        <td>{{ $lubricantpurchase->l_liter }}</td>
                        <td>{{ $lubricantpurchase->l_rs }}</td>
                        <td>{{ $lubricantpurchase->p_method }}</td>


                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
