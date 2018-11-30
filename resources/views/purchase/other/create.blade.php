@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Other Purchases Details

                        </div>
                        <div class="card-body">
                            <form action="{{ route('otherpurchase.store') }}" method="post">
                                @csrf



                                <div class="form-group">
                                    <label for="date">Date</label><br>
                                    <input class="form-control" type="date" id="date" name="date" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="item">Purchase Item </label><br>
                                    <input class="form-control" type="text" id="item" name="item" placeholder="Enter Unit Price Date.."><br>

                                </div>


                                <div class="form-group">
                                    <label for="o_rs">Amount(RS)</label><br>
                                    <input class="form-control" type="text" id="o_rs" name="o_rs" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="method">Paid Method</label><br>
                                    <input class="form-control" type="text" id="method" name="method" placeholder="Enter Unit Price Date.."><br>

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
