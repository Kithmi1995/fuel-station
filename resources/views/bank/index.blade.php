@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Deposit ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Bank Name</th>

                </tr>
                @foreach($bankDeposits as $bankDeposit)
                    <tr>
                        <td>
                            <a href="{{ route('bank.show', $bankDeposit->id) }}">
                                {{ $bankDeposit->id }}
                            </a>

                        </td>
                        <td>{{ $bankDeposit->user->first_name }}</td>
                        <td>{{ $bankDeposit->date }}</td>
                        <td>{{ $bankDeposit->amount }}</td>
                        <td>{{ $bankDeposit->b_name }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
