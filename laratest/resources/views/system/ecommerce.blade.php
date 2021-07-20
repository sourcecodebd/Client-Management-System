@extends('layout.main')

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('system.physicalCreate')}}">Physical Store</a> |
<a href="{{route('system.socialMedia')}}">Social Media</a> |
<a href="{{route('system.ecommerce')}}">E-Commerce Web App</a> |
@endsection

@section('page_title')    
<h1>E-Commerce <br> {{ session('email') }} </h1>
@endsection


@section('main_content')
    <center><h1>Sold Items of last 7 Days</h1></center>

    No. of Products:&nbsp;&nbsp;
    {{$seven}} <br><br>
<center>
    <table border="1" style="text-align:center">

        <tr>
            <td>Id</td>
            <td>Customer Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>

            @foreach ($list as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['customer_name']}}</td>
                <td>{{$i['customer_address']}}</td>
                <td>{{$i['phone']}}</td>
                <td>{{$i['product_id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['quantity']}}</td>
                <td>{{$i['total_price']}}</td>
                <td>{{$i['date_sold']}}</td>
                <td>{{$i['payment_type']}}</td>
                <td>{{$i['status']}}</td>
                <td>{{$i['created_at']}}</td>
                <td>{{$i['updated_at']}}</td>
            </tr>
            @endforeach     
    </table>
</center>
@endsection 

@section('title')
Home | E-Commerce
@endsection