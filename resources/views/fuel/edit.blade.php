@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Fuel Register

                        </div>
                        <div class="card-body">
                            <form action="{{ route('fuel.update', $fuel->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}

                                <div class="form-group">
                                    <label for="type">Fuel Type</label><br>
                                    <input value="{{ $fuel->type }}" class="form-control" type="text" id="type" name="type" placeholder="Enter Fuel Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="price">Unit Price</label><br>
                                    <input value="{{ $fuel->price }}" class="form-control" type="text" id="price" name="price" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="price_date">Unit Priced Date</label><br>
                                    <input value="{{ $fuel->price_date }}" class="form-control" type="date" id="price_date" name="price_date" placeholder="Enter Unit Priced Date.."><br>
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
