@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>NIC</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Date of Birth</th>
                </tr>
                @foreach($pumpers as $pumper)
                    <tr>
                        <td>
                            <a href="{{ route('pumper.show', $pumper->id) }}">
                                {{ $pumper->id }}
                            </a>

                        </td>
                        <td>{{ $pumper->user->first_name }}</td>
                        <td>{{ $pumper->nic }}</td>
                        <td>{{ $pumper->first }}</td>
                        <td>{{ $pumper->last }}</td>
                        <td>{{ $pumper->address }}</td>
                        <td>{{ $pumper->contact }}</td>
                        <td>{{ $pumper->dob }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
