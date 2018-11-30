@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Lubricant Purchase Details

                        </div>
                        <div class="card-body">
                            <form action="{{ route('lubricantpurchase.store') }}" method="post">
                                @csrf


                                <div class="form-group">
                                    <label for="date">Date</label><br>
                                    <input class="form-control" type="date" id="date" name="date" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="lub_id">Lubricant ID</label><br>
                                    <input class="form-control" type="text" id="lub_id" name="lub_id" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="lub_name">Lubricant Name</label><br>
                                    <input class="form-control" type="text" id="lub_name" name="lub_name" placeholder="Enter Unit Price Date.."><br>

                                </div>



                                <div class="form-group">
                                    <label for="l_liter">Amount(Liters)</label><br>
                                    <input class="form-control" type="text" id="l_liter" name="l_liter" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="l_rs">Amount(RS)</label><br>
                                    <input class="form-control" type="text" id="l_rs" name="l_rs" placeholder="Enter Unit Price Date.."><br>

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
