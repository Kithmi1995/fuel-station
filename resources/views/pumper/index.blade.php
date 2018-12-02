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
                    <td>Action</td>
                </tr>
                @foreach($pumpers as $pumper)
                    <tr>
                        <td>

                                {{ $pumper->id }}


                        </td>
                        <td>{{ $pumper->user->first_name }}</td>
                        <td>{{ $pumper->nic }}</td>
                        <td>{{ $pumper->first }}</td>
                        <td>{{ $pumper->last }}</td>
                        <td>{{ $pumper->address }}</td>
                        <td>{{ $pumper->contact }}</td>
                        <td>{{ $pumper->dob }}</td>

                        <td>
                            <a href="{{ route('pumper.show', $pumper->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('pumper.edit', $pumper->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $pumper->id }}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-modal-{{ $pumper->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                        <form action="{{ route('pumper.destroy', $pumper->id) }}" method="post">
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
