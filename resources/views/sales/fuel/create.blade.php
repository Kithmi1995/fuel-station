@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Fuel Sales Details

                        </div>
                        <div class="card-body">
                            <form action="{{ route('fuelsale.store') }}" method="post">
                                @csrf


                               {{-- <div>
                                   <select class="mdb-select md-form">
                                       <option value="" disabled selected>Choose your option</option>
                                       @foreach($pumps as $pump)
                                           <option value="{{ $pump->id }}">{{ $pump->id }}</option>
                                       @endforeach
                                   </select>
                                </div>--}}


                                <div class="form-group">
                                    <label for="pump_id">Pump</label><br>
                                    <select name="pump_id" id="pump_id" class="mdb-select">
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach($pumps as $pump)
                                            <option value="{{ $pump->id }}">{{ $pump->id.' - '.$pump->pump_name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="pumper_id">Pumper ID</label><br>
                                    <select name="pumper_id" id="pumper_id" class="mdb-select">
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach($pumpers as $pumper)
                                            <option value="{{ $pumper->id }}">{{ $pumper->id.' - '.$pumper->pumper_name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="close">Closing Meter Reading</label><br>
                                    <input class="form-control" type="text" id="close" name="close" placeholder="Enter Closing Meter Reading.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="s_time">Starting Time</label><br>
                                    <input class="form-control" type="time" id="s_time" name="s_time" placeholder="Enter Starting Time.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="e_time">Ending Time</label><br>
                                    <input class="form-control" type="time" id="e_time" name="e_time" placeholder="Enter Ending Time.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="s_date">Date</label><br>
                                    <input class="form-control" type="date" id="s_date" name="s_date" placeholder="Enter Date.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="d_sale">Debtor Sales</label><br>
                                    <input class="form-control" type="text" id="d_sale" name="d_sale" placeholder="EnterDebtor Sales.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="c_sale">Credit Card Sales</label><br>
                                    <input class="form-control" type="text" id="c_sale" name="c_sale" placeholder="Enter Credit Card Sales.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="shortage">Shortages</label><br>
                                    <input class="form-control" type="text" id="shortage" name="shortage" placeholder="Enter Shortages.."><br>

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


    {{--@endsection--}}

    {{--</form>--}}

@endsection

@section('scripts')

    <script>
        $(function () {
            $('.mdb-select').materialSelect();
        });
    </script>

@endsection
