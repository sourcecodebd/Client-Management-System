@extends('home.sales')

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('system.product')}}">Product-Management</a> |
<a href="{{route('product.Elist')}}">Existing Product List</a> |
<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |
<a href="{{route('product.Pcreate')}}">Add Product</a> |
@endsection


@section('page_title')    
<h1>Product-Management <br> {{ session('email') }} </h1>
@endsection

@section('main_content')

<br>
    {{session('msg')}}
<br>

    <center><h1>Existing Product List</h1></center>
    
<center>
    <table border="1" style="text-align:center">

        <tr>
            <td>Id</td>
            <td>Product Name</td>
            <td>Category</td>
            <td>Unit Price</td>
            <td>Status</td>
            <td>ACTION</td>
        </tr>

            @foreach ($list as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['category']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['status']}}</td>
                <td><a href="{{route('product.Eedit', [$i['id']])}}">Edit</a>
                    <a href="{{route('product.Edelete', [$i['id']])}}">Delete</a>
                    <a href="{{route('product.Eshow', [ $i->id, $i->product_name])}}">Details</a>
                </td>
            </tr>
            @endforeach     
    </table>
</center>
@endsection 

@section('title')
Home | Physical Store
@endsection