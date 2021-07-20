@extends('layout.nav_bar')

@section('title')
Home | Customer
@endSection

@section('page_title')

<h1>Hey {{Session('user_type')}} Welcome Home! <br> {{ session('email') }} </h1>
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('home.Clist')}}">Customer List</a> |
<a href="{{route('product.Elist')}}">Existing Product List</a> |
<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |

<br><br>

    {{session('msg')}}

@endSection
