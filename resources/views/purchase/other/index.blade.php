@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Purchase Item</th>
                    <th>Amount(RS)</th>
                    <th>Paid Method</th>
                </tr>

                @foreach($otherpurchases as $otherpurchase)
                    <tr>
                        <td>
                            <a href="{{ route('otherpurchase.show', $otherpurchase->id) }}">
                                {{ $otherpurchase->id }}
                            </a>

                        </td>
                        <td>{{ $otherpurchase->user->first_name }}</td>
                        <td>{{ $otherpurchase->date }}</td>
                        <td>{{ $otherpurchase->item }}</td>
                        <td>{{ $otherpurchase->o_rs }}</td>
                        <td>{{ $otherpurchase->method }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
