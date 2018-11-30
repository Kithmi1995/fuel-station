@extends('layouts.app')

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
                            <form action="{{ route('pumper.update', $pumper->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nic">Pumper NIC</label><br>
                                    <input value="{{ $pumper->nic }}" class="form-control" type="text" id="nic" name="nic" placeholder="Enter Lubricant Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="first">Pumper First Name</label><br>
                                    <input value="{{ $pumper->first }}" class="form-control" type="text" id="first" name="first" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="last">Pumper Last Name</label><br>
                                    <input value="{{ $pumper->last }}"class="form-control" type="text" id="last" name="last" placeholder="Enter Last Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="address">Pumper Address</label><br>
                                    <input value="{{ $pumper->address }}"class="form-control" type="text" id="address" name="address" placeholder="Enter Last Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="contact">Pumper Contact Number</label><br>
                                    <input value="{{ $pumper->contact }}"class="form-control" type="text" id="contact" name="contact" placeholder="Enter Last Name.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth</label><br>
                                    <input value="{{ $pumper->dob }}"class="form-control" type="text" id="dob" name="dob" placeholder="Enter Last Name.."><br>

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
