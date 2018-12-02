@extends('layouts.master')

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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <div class="md-form">
                                    <label for="d_name">Debtor Name/Company Name</label><br>
                                    <input class="form-control" type="text" id="d_name" name="d_name"><br>

                                </div>

                                <div class="md-form">
                                    <label for="address">Address</label><br>
                                    <input class="form-control" type="text" id="address" name="address" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="contact">Contact Number</label><br>
                                    <input class="form-control" type="text" id="contact" name="contact" ><br>
                                </div>

                                <div class="md-form">
                                    <label for="email">Email</label><br>
                                    <input class="form-control" type="text" id="email" name="email" ><br>
                                </div>

                                <div class="md-form">
                                    <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
                                </div>
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
