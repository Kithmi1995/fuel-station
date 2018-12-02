@extends('layouts.master')

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
                    <th>Action</th>
                </tr>
                @foreach($debtors as $debtor)
                    <tr>
                        <td>
                            {{ $debtor->id }}
                        </td>


                        <td>{{ $debtor->user->first_name }}</td>
                        <td>{{ $debtor->d_name }}</td>
                        <td>{{ $debtor->address }}</td>
                        <td>{{ $debtor->contact }}</td>
                        <td>{{ $debtor->email }}</td>

                        <td>
                            <a href="{{ route('debtor.show', $debtor->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('debtor.edit', $debtor->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $debtor->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $debtor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            <form action="{{ route('debtor.destroy', $debtor->id) }}" method="post">
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
