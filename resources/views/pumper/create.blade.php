@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Pumper Register

                        </div>
                        <div class="card-body">
                            <form action="{{ route('pumper.store') }}" method="post">
                                @csrf


                                <div class="form-group">
                                    <label for="nic">Pumper NIC</label><br>
                                    <input class="form-control" type="text" id="nic" name="nic" placeholder="Enter Lubricant Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="first">Pumper First Name</label><br>
                                    <input class="form-control" type="text" id="first" name="first" placeholder="Enter First Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="last">Pumper Last Name</label><br>
                                    <input class="form-control" type="text" id="last" name="last" placeholder="Enter Last Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="address">Pumper Address</label><br>
                                    <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address .."><br>

                                </div>


                                <div class="form-group">
                                    <label for="contact">Pumper Contact Number</label><br>
                                    <input class="form-control" type="text" id="contact" name="contact" placeholder="Enter Contact .."><br>

                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth</label><br>
                                    <input class="form-control" type="date" id="dob" name="dob" placeholder="Enter Date of Birth .."><br>

                                </div>





                                <input type="submit" value="Submit" class="form-control btn btn-primary">
                            </form>


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
