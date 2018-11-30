@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Debtor Deposit Details

                        </div>
                        <div class="card-body">
                            <form action="{{ route('deposit_debtor.update', $depositDebtor->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                {{--<div class="form-group">
                                    <label for="fid">Fuel ID</label><br>
                                    <input class="form-control" type="text" id="fid" name="fuelid" placeholder="Enter Fuel Id.."><br>

                                </div>--}}

                                <div class="form-group">
                                    <label for="date">Date</label><br>
                                    <input value="{{ $depositDebtor->date }}" class="form-control" type="date" id="date" name="date" placeholder="Enter Lubricant Type.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="deb_id">Debtor ID</label><br>
                                    <input value="{{ $depositDebtor->deb_id }}" class="form-control" type="text" id="deb_id" name="deb_id" placeholder="Enter Unit Price.."><br>

                                </div>

                                <div class="form-group">
                                    <label for="amount">Amount Received</label><br>
                                    <input value="{{ $depositDebtor->amount }}" class="form-control" type="text" id="amount" name="amount" placeholder="Enter Unit Priced Date.."><br>
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
