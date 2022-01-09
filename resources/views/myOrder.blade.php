@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h3>  <center>My Order List</center> </h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Order ID</td>
                        <td>Date time</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('pdfReport')}}" class="btn btn-info btn-xs">Download Report</a>

       </div> 
    </div>
    <br>
    <div class="col-sm-1"></div>
</div>
@endsection