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
                            <form action="{{ route('fuelpurchase.store') }}" method="post">
                                @csrf




                                <div class="form-group">
                                    <label for="date">Date</label><br>
                                    <input class="form-control" type="date" id="date" name="date" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="fuel_id">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fuel_id" name="fuel_id" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="fuel_name">Fuel Name</label><br>
                                    <input class="form-control" type="text" id="fuel_name" name="fuel_name" placeholder="Enter Unit Price Date.."><br>

                                </div>



                                <div class="form-group">
                                    <label for="f_liter">Amount(Liters)</label><br>
                                    <input class="form-control" type="text" id="f_liter" name="f_liter" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="f_rs">Amount(RS)</label><br>
                                    <input class="form-control" type="text" id="f_rs" name="f_rs" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="p_method">Paid Method</label><br>
                                    <input class="form-control" type="text" id="p_method" name="p_method" placeholder="Enter Unit Price Date.."><br>

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
