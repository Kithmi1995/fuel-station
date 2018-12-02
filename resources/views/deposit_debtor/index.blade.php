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
                    <th>Action</th>


                </tr>
                @foreach($depositDebtors as $depositDebtor)
                    <tr>
                        <td>
                            {{ $depositDebtor->id }}
                        </td>
                        <td>{{ $depositDebtor->user->first_name }}</td>
                        <td>{{ $depositDebtor->date }}</td>
                        <td>{{ $depositDebtor->deb_id }}</td>
                        <td>{{ $depositDebtor->amount }}</td>


                        <td>
                            <a href="{{ route('deposit_debtor.show', $depositDebtor->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('deposit_debtor.edit', $depositDebtor->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $depositDebtor->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $depositDebtor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            <form action="{{ route('fuel.destroy', $depositDebtor->id) }}" method="post">
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
