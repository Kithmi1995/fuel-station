@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Fuel Sale Edit

                        </div>
                        <div class="card-body">
                            <form action="{{ route('fuelsale.update', $fuelsale->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}


                                <div class="form-group">
                                    <label for="pump_id">Pump ID</label><br>
                                    <input value="{{ $fuelsale->pump_id }}" class="form-control" type="text" id="pump_id" name="pump_id" placeholder="Enter Lubricant Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="pumper_id">Pumper ID</label><br>
                                    <input value="{{ $fuelsale->pumper_id }}" class="form-control" type="text" id="pumper_id" name="pumper_id" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="close">Closing Meter Reading</label><br>
                                    <input value="{{ $fuelsale->close }}" class="form-control" type="text" id="close" name="close" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="s_time">Starting Time</label><br>
                                    <input value="{{ $fuelsale->s_time }}" class="form-control" type="time" id="s_time" name="s_time" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="e_time">Ending Time</label><br>
                                    <input value="{{ $fuelsale->e_time }}" class="form-control" type="time" id="e_time" name="e_time" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="s_date">Date</label><br>
                                    <input value="{{ $fuelsale->s_date }}" class="form-control" type="date" id="s_date" name="s_date" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="d_sale">Debtor Sales</label><br>
                                    <input value="{{ $fuelsale->d_sale }}" class="form-control" type="text" id="d_sale" name="d_sale" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="c_sale">Credit Card Sales</label><br>
                                    <input value="{{ $fuelsale->c_sale }}" class="form-control" type="text" id="c_sale" name="c_sale" placeholder="Enter Unit Price Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="shortage">Shortages</label><br>
                                    <input value="{{ $fuelsale->shortage }}" class="form-control" type="text" id="shortage" name="shortage" placeholder="Enter Unit Price Date.."><br>

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
