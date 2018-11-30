@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Pump Register

                        </div>
                        <div class="card-body">
                            <form action="{{ route('pump.update', $pump->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}

                                <div class="form-group">
                                    <label for="pump_name">Pump Name</label><br>
                                    <input value="{{ $pump->pump_name }}" class="form-control" type="text" id="pump_name" name="pump_name" placeholder="Enter Lubricant Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="tank_id">Fuel ID</label><br>
                                    <input value="{{ $pump->fuel_id }}" class="form-control" type="text" id="fuel_id" name="fuel_id" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="tank_id">Tank ID</label><br>
                                    <input value="{{ $pump->tank_id }}" class="form-control" type="text" id="tank_id" name="tank_id" placeholder="Enter Unit Priced Date.."><br>
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
