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

                        <td>
                            <a href="{{ route('fuelsale.show', $fuelsale->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('fuelsale.edit', $fuelsale->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $fuelsale->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $fuelsale->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                <div class="modal-dialog modal-dialog-centered" role="document">


                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Confirm Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure, you want to delete this?

                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('fuelsale.destroy', $fuelsale->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>



                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
