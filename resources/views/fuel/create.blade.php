@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h4 class="card-title">
                                Fuel Register
                            </h4>
                        </div>
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <form action="{{ route('fuel.store') }}" method="post">
                                    @csrf
                                    {{--<div class="form-group">
                                        <label for="fid">Fuel ID</label><br>
                                        <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                    </div>--}}

                                    <div class="md-form">
                                        <label for="type">Fuel Type</label><br>
                                        <input class="form-control" type="text" id="type" name="type" ><br>

                                    </div>

                                    <div class="md-form input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rs.</div>
                                        </div>
                                        <label for="price" >Unit Price</label><br>
                                        <input class="form-control" placeholder="Unit Price" type="text" id="price" name="price"><br>

                                    </div>

                                    {{--<div class="md-form">
                                        <label for="price_date">Unit Priced Date</label><br>
                                        <input class="form-control" type="date" id="price_date" name="price_date"><br>
                                    </div>--}}
                                    <div class="md-form">
                                        <input type="text" name="price_date" id="price_date" class="form-control datepicker">
                                        <label for="price_date">Unit Priced Date</label>
                                    </div>

                                    <div class="md-form">
                                        <input type="submit" value="Submit" class="btn btn-block btn-outline-primary btn-rounded waves-effect">
                                    </div>


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

    <script type="text/javascript" defer>
        $(document).ready(function () {
            $('.datepicker').pickadate({
                format: 'yyyy/mm/dd',
                formatSubmit: 'yyyy/mm/dd'
            });
        });
    </script>
@endsection
