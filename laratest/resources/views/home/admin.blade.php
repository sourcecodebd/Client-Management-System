@extends('layout.nav_bar')

@section('title')
Home | Admin
@endSection

@section('page_title')

<h1>Hey {{Session('user_type')}} Welcome Home! <br> {{ session('email') }} </h1>
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('home.Ccreate')}}">Create Customer</a> |
<a href="{{route('home.Clist')}}">Customer List</a> |

<br><br>

    {{session('msg')}}

@endSection

