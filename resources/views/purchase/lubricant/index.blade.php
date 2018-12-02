@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Lubricant ID</th>
                    <th>Lubricant Name</th>
                    <th>Amount(Liters)</th>
                    <th>Amount(RS)</th>
                    <th>Paid Method</th>
                    <th>Action</th>
                </tr>

                @foreach($lubricantpurchases as $lubricantpurchase)
                    <tr>
                        <td>

                                {{ $lubricantpurchase->id }}

                        </td>
                        <td>{{ $lubricantpurchase->user->first_name }}</td>
                        <td>{{ $lubricantpurchase->date }}</td>
                        <td>{{ $lubricantpurchase->lub_id }}</td>
                        <td>{{ $lubricantpurchase->lub_name }}</td>
                        <td>{{ $lubricantpurchase->l_liter }}</td>
                        <td>{{ $lubricantpurchase->l_rs }}</td>
                        <td>{{ $lubricantpurchase->p_method }}</td>

                        <td>
                            <a href="{{ route('lubricantpurchase.show', $lubricantpurchase->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('lubricantpurchase.edit', $lubricantpurchase->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $lubricantpurchase->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $lubricantpurchase->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            <form action="{{ route('lubricantpurchase.destroy', $lubricantpurchase->id) }}" method="post">
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
