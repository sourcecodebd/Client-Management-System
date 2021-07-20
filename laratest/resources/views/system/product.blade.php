@extends('layout.nav_bar')

@section('title')
Home | Product-Management
@endSection

@section('page_title')

<h1>Product-Management <br> {{ session('email') }} </h1>
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('product.Elist')}}">Existing Product List</a> |
<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |
<a href="{{route('product.Pcreate')}}">Add Product</a> |
<br><br>

    {{session('msg')}}

@endSection