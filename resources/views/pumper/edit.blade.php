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
                            <form action="{{ route('pumper.update', $pumper->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="md-form">
                                    <label for="nic">Pumper NIC</label><br>
                                    <input value="{{ $pumper->nic }}" class="form-control" type="text" id="nic" name="nic" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="first">Pumper First Name</label><br>
                                    <input value="{{ $pumper->first }}" class="form-control" type="text" id="first" name="first" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="last">Pumper Last Name</label><br>
                                    <input value="{{ $pumper->last }}"class="form-control" type="text" id="last" name="last" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="address">Pumper Address</label><br>
                                    <input value="{{ $pumper->address }}"class="form-control" type="text" id="address" name="address" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="contact">Pumper Contact Number</label><br>
                                    <input value="{{ $pumper->contact }}"class="form-control" type="text" id="contact" name="contact"><br>

                                </div>

                                <div class="md-form">
                                    <label for="dob">Date of Birth</label><br>
                                    <input value="{{ $pumper->dob }}"class="form-control" type="text" id="dob" name="dob" ><br>

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
