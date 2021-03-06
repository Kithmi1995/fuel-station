@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Tank Edit

                        </div>
                        <div class="card-body">
                            <form action="{{ route('tank.update', $tank->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}

                                <div class="md-form">
                                    <label for="tank_name">Tank Name</label><br>
                                    <input value="{{ $tank->tank_name }}" class="form-control" type="text" id="tank_name" name="tank_name" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="fuel_id">Fuel ID</label><br>
                                    <input value="{{ $tank->fuel_id }}"  class="form-control" type="text" id="fuel_id" name="fuel_id" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="capacity">Capacity</label><br>
                                    <input value="{{ $tank->capacity }}"  class="form-control" type="text" id="capacity" name="capacity" ><br>

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
