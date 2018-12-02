@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Tank Register

                        </div>
                        <div class="card-body">
                            <form action="{{ route('tank.store') }}" method="post">
                                @csrf


                                <div class="md-form">
                                    <label for="tank_name">Tank Name</label><br>
                                    <input class="form-control" type="text" id="tank_name" name="tank_name" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="fuel_id">Fuel ID</label><br>
                                    <select name="fuel_id" id="fuel_id" class="mdb-select">
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{ $fuel->id }}">{{ $fuel->id.' - '.$fuel->type }}</option>
                                        @endforeach
                                    </select>

                                    {{--<input class="form-control" type="text" id="fuel_id" name="fuel_id" placeholder="Enter Unit Price.."><br>--}}

                                </div>

                                <div class="md-form">
                                    <label for="capacity">Capacity</label><br>
                                    <input class="form-control" type="text" id="capacity" name="capacity"><br>

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

