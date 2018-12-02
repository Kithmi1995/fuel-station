@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Fuel Purchase Details

                        </div>
                        <div class="card-body">
                            <form action="/reports/fuelpurchase" method="post" target="_blank">
                                @csrf




                                <div class="md-form">
                                    <label for="date_from">From(Date)</label><br>
                                    <input class="form-control" type="date" id="date_from" name="date_from" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="date_to">To(Date)</label><br>
                                    <input class="form-control" type="date" id="date_to" name="date_to" ><br>

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
