@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-primary" id="get-report">
                    Get Report
                </button>
            </div>
        </div>
        <div class="card" id="report-data">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Added User</th>
                    <th>Date</th>
                    <th>Fuel ID</th>
                    <th>Fuel Name</th>
                    <th>Amount(Liters)</th>
                    <th>Amount(RS)</th>
                    <th>Paid Method</th>
                    <th>Action</th>



                </tr>
                @foreach($fuelpurchases as $fuelpurchase)
                    <tr>
                        <td>
                                {{ $fuelpurchase->id }}


                        </td>
                        <td>{{ $fuelpurchase->user->first_name }}</td>
                        <td>{{ $fuelpurchase->date }}</td>
                        <td>{{ $fuelpurchase->fuel_id }}</td>
                        <td>{{ $fuelpurchase->fuel_name }}</td>
                        <td>{{ $fuelpurchase->f_liter }}</td>
                        <td>{{ $fuelpurchase->f_rs }}</td>
                        <td>{{ $fuelpurchase->p_method }}</td>

                        <td>
                            <a href="{{ route('fuelpurchase.show', $fuelpurchase->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('fuelpurchase.edit', $fuelpurchase->id) }}" class="btn btn-blue-grey btn-sm">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete-modal-{{ $fuelpurchase->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $fuelpurchase->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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
                                            <form action="{{ route('fuelpurchase.destroy', $fuelpurchase->id) }}" method="post">
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

@section('scripts')
    <script>
        $(function () {
           /*$('#get-report').mouseover(function () {
               $('#get-report').css("cssText", "background-color: red !important;");
           }) ;

           $('#get-report').mouseout(function () {
               $('#get-report').css("cssText", "background-color: blue !important;");
           });*/

           $('#get-report').click(function () {
               var doc = new jsPDF();

               var specialElementHandlers = {
                   '#editor': function(element, renderer){
                       return true;
                   },
                   '.controls': function(element, renderer){
                       return true;
                   }
               };

               // All units are in the set measurement for the document
               // This can be changed to "pt" (points), "mm" (Default), "cm", "in"
               doc.fromHTML($('#report-data').get(0), 15, 15, {
                   'width': 170,
                   'elementHandlers': specialElementHandlers
               });

               doc.save('report.pdf');

           });
        });
    </script>
@endsection
