@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>Debtor ID</th>
                    <th>Added User</th>
                    <th>Debtor Name/Company Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                </tr>
                @foreach($debtors as $debtor)
                    <tr>
                        <td>
                            <a href="{{ route('debtor.show', $debtor->id) }}">
                                {{ $debtor->id }}
                            </a>

                        </td>
                        <td>{{ $debtor->user->first_name }}</td>
                        <td>{{ $debtor->d_name }}</td>
                        <td>{{ $debtor->address }}</td>
                        <td>{{ $debtor->contact }}</td>
                        <td>{{ $debtor->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
