@extends('layout.nav_bar')


@section('page_title')    
<h1>Hey {{Session('user_type')}} Welcome Home! <br> {{ session('email') }} </h1>
@endsection


@section('title')
Home
@endsection


<!-- This is the navigation bar given below which is free to access from anywhere, no Middleware restriction -->

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('home.Clist')}}">Customer List</a> |
<a href="{{route('system.salesLog')}}">View Sales Log</a> |
<a href="{{route('system.socialMedia')}}">Social Media</a> |
<a href="{{route('system.ecommerce')}}">E-Commerce Web App</a> |
<a href="{{route('product.Elist')}}">Existing Product List</a> |
<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |
@endsection