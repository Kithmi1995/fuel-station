<html>
<head>
    <title>Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
</head>
<body>

<div id="page">
    <h1>Fuel Purchase Report From {{ $from }} - {{ $to }}</h1>
    <hr>
    @foreach($fuels as $fuel)
        <hr>
            {{--ID:- {{ $fuel->id }} |--}} Code:- {{ $fuel->code }} | Type:- {{ $fuel->type }}
            @if(count($fuel->fuel_purchases) > 0)

                <table border="1">
                    <caption>Purchase Details</caption>
                    <thead>
                        {{--<th>Purchase ID</th>--}}
                        <th>Date</th>
                        <th>Liters</th>
                        <th>Price</th>
                        <th>Payment Method</th>
                    </thead>
                    <tbody>
                        @foreach($fuel->fuel_purchases as $fuel_purchase)
                            <tr>
                                {{--<td>{{ $fuel_purchase->id }}</td>--}}
                                <td>{{ $fuel_purchase->date }}</td>
                                <td>{{ $fuel_purchase->f_liter }}</td>
                                <td>{{ $fuel_purchase->l_rs }}</td>
                                <td>{{ $fuel_purchase->p_method }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>


            @endif

        <hr>

    @endforeach
    {{--<table border="1">--}}
        {{--<thead>--}}
        {{--<th>ID</th>--}}
        {{--<th>Name</th>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($fuels as $fuel)--}}
            {{--<tr>--}}
                {{--<td>{{ $fuel-> }}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}
    <hr>

</div>


<script>


        $(function(){

            var doc = new jsPDF();

            // We'll make our own renderer to skip this editor
            var specialElementHandlers = {
                '#editor': function(element, renderer){
                    return true;
                },
                '.controls': function(element, renderer){
                    return true;
                }
            };

            // All units are in the set measurement for the document
            // This can be changed to "pt" (points), "mm" (Default), "cm", "in"
            doc.fromHTML($('#page').get(0), 15, 15, {
                'width': 200,
                'elementHandlers': specialElementHandlers
            });

            {{--if(doc.save('report-{{ date('Y-m-d h-i-s') }}.pdf')){--}}
                {{--window.close();--}}
            {{--}--}}
            doc.save('report-{{ date('Y-m-d h-i-s') }}.pdf');

            setTimeout(function(){
                    window.close();
                }, 1000);

            // doc.output('save', 'hello.pdf');
            // doc.output('dataurlnewwindow');     //opens the data uri in new window



        });

</script>


</body>
</html>
