@extends('layouts.master')

@section('content')

    <div class="container">


        <div class="row justify-content-center">

            <div class="col-md-8">
                <!-- /.card -->
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-header">
                            Bank Deposit

                        </div>
                        <div class="card-body">
                            <form action="{{ route('bank.store') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <div class="md-form">
                                    <label for="date">Date</label><br>
                                    <input class="form-control" type="date" id="date" name="date" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="amount">Amount</label><br>
                                    <input class="form-control" type="text" id="amount" name="amount" ><br>

                                </div>

                                <div class="md-form">
                                    <label for="b_name">Bank Name</label><br>
                                    <input class="form-control" type="text" id="b_name" name="b_name"><br>

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
