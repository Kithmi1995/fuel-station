@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Debtor ID</th>
                    <th>Amount Received</th>


                </tr>
                @foreach($depositDebtors as $depositDebtor)
                    <tr>
                        <td>
                            <a href="{{ route('deposit_debtor.show', $depositDebtor->id) }}">
                                {{ $depositDebtor->id }}
                            </a>

                        </td>
                        <td>{{ $depositDebtor->user->first_name }}</td>
                        <td>{{ $depositDebtor->date }}</td>
                        <td>{{ $depositDebtor->deb_id }}</td>
                        <td>{{ $depositDebtor->amount }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
