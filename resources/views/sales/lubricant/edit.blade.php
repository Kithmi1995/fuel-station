@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                                Lubricant Sales Edit

                        </div>
                        <div class="card-body">
                            <form action="{{ route('lubricantsale.update', $lubricantsale->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}




                                    <div class="md-form">
                                        <label for="lub_id">Lubricant ID</label><br>
                                        <input value="{{ $lubricantsale->lub_id }}" class="form-control" type="text" id="lub_id" name="lub_id" ><br>

                                    </div>

                                    <div class="md-form">
                                        <label for="date">Date</label><br>
                                        <input value="{{ $lubricantsale->date }}" class="form-control" type="date" id="date" name="date" ><br>

                                    </div>

                                    <div class="md-form">
                                        <label for="time">Time</label><br>
                                        <input value="{{ $lubricantsale->time }}" class="form-control" type="time" id="time" name="time" ><br>

                                    </div>

                                    <div class="md-form">
                                        <label for="noi">Number Of Item</label><br>
                                        <input value="{{ $lubricantsale->noi }}" class="form-control" type="text" id="noi" name="noi" ><br>

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
