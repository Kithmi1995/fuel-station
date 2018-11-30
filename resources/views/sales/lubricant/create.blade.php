@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Lubricant Sales Details

                        </div>
                        <div class="card-body">
                            <form action="{{ route('lubricantsale.store') }}" method="post">
                                @csrf



                                <div class="form-group">
                                    <label for="lub_id">Lubricant ID</label><br>
                                    <select name="lub_id" id="lub_id" class="mdb-select">
                                        <option value="" disabled selected>Choose your option</option>
                                        @foreach($lubricants as $lubricant)
                                            <option value="{{ $lubricant->id }}">{{ $lubricant->id.' - '.$lubricant->lub_name }}</option>
                                        @endforeach
                                    </select>


                                </div>

                                <div class="form-group">
                                    <label for="date">Date</label><br>
                                    <input class="form-control" type="date" id="date" name="date" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="time">Time</label><br>
                                    <input class="form-control" type="time" id="time" name="time" placeholder="Enter Unit Price Date.."><br>

                                </div>



                                <div class="form-group">
                                    <label for="noi">Number Of Item</label><br>
                                    <input class="form-control" type="text" id="noi" name="noi" placeholder="Enter Unit Price Date.."><br>

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
