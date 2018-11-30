@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Debtor Register

                        </div>
                        <div class="card-body">
                            <form action="{{ route('debtor.store') }}" method="post">
                                @csrf


                                <div class="form-group">
                                    <label for="d_name">Debtor Name/Company Name</label><br>
                                    <input class="form-control" type="text" id="d_name" name="d_name" placeholder="Enter Debtor Name/Company Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label><br>
                                    <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact Number</label><br>
                                    <input class="form-control" type="text" id="contact" name="contact" placeholder="Enter Contact Number.."><br>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label><br>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email.."><br>
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
