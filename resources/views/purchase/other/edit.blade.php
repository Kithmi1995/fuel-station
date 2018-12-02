@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Other purchase Details
                        </div>
                        <div class="card-body">
                            <form action="{{ route('otherpurchase.update', $otherpurchase->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}


                                <div class="md-form">
                                    <label for="date">Date</label><br>
                                    <input  value="{{ $otherpurchase->date }}" class="form-control" type="date" id="date" name="date" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="item">Purchase Item </label><br>
                                    <input  value="{{ $otherpurchase->item }}" class="form-control" type="text" id="item" name="item" ><br>

                                </div>


                                <div class="md-form">
                                    <label for="o_rs">Amount(RS)</label><br>
                                    <input  value="{{ $otherpurchase->o_rs }}" class="form-control" type="text" id="o_rs" name="o_rs" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="method">Paid Method</label><br>
                                    <input  value="{{ $otherpurchase->method }}" class="form-control" type="text" id="method" name="method" ><br>

                                </div>

                                    <input type="submit" value="Submit" class="form-control btn btn-primary">
                            </form>

                            <!-- /.panel-body -->
                        </div>

                    </div>
                    <!-- /.col-lg-12 -->

                    <!-- /.col-lg-6 -->

                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection
