@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('lubricant.create') }}" class="btn btn-success btn-sm">Create New</a>
            </div>

        </div>

        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>code</th>
                    <th>Type</th>
                    <th>Unit Price</th>
                    <th>Unit priced Date</th>


                    <th>Action</th>

                </tr>
                @foreach($lubricants as $lubricant)
                    <tr>
                        <td>
                            {{ $lubricant->id }}
                        </td>

                        <td>{{ $lubricant->user->first_name }}</td>
                        <td>{{ $lubricant->code }}</td>
                        <td>{{ $lubricant->type }}</td>
                        <td>{{ $lubricant->price }}</td>


                        <td>
                            <a href="{{ route('lubricant.show', $lubricant->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('lubricant.edit', $lubricant->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>



                            {{--<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-modal-{{ $fuel->id }}">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="edit-modal-{{ $fuel->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            Are you sure, you want to edit this?

                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('fuel.edit', $fuel->id) }}" method="post">
                                                @csrf
                                                @method('EDIT')
                                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $lubricant->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $lubricant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            <form action="{{ route('lubricant.destroy', $lubricant->id) }}" method="post">
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
