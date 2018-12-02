@extends('layouts.master')

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
                            <form action="{{ route('pump.store') }}" method="post">
                                @csrf


                                <div class="md-form">
                                    <label for="pump_name">Pump Name</label><br>
                                    <input class="form-control" type="text" id="pump_name" name="pump_name"><br>

                                </div>

                                <div class="md-form">
                                    <label for="fuel_id">Fuel ID</label><br>
                                    {{--<select name="id" id="id" class="mdb-select md-form">
                                            <option value="" disabled selected>Choose your option</option>
                                            @foreach($fuels as $fuel)
                                                <option value="{{ $fuel->id }}">{{ $fuel->id }}</option>
                                            @endforeach
                                    </select>--}}
                                    <input class="form-control" type="text" id="fuel_id" name="fuel_id" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="tank_id">Tank ID</label><br>
                                    {{--<select name="id" id="id" class="mdb-select md-form">
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach($tanks as $tank)
                                            <option value="{{ $tank->id }}">{{ $tank->id }}</option>
                                        @endforeach
                                    </select>--}}
                                    <input class="form-control" type="text" id="tank_id" name="tank_id" ><br>

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

@section('scripts')

    <script>
        $(function () {
            $('.mdb-select').materialSelect();
        });
    </script>

@endsection
