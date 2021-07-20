@extends('layout/main')


@section('title')
Home | Customer List
@endsection


@section('page_title')
<h1>Customer List</h1>
@endsection


@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<br><br>
@endsection


@section('main_content')

<center>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
            <td>Type</td>
            <td>ACTION</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['user_type'] }}</td>
            <td>
                <a href="{{ route('home.Cedit', [$list[$i]['id']]) }}">Edit</a> |
                <a href="/home/delete/customer/{{ $list[$i]['id'] }}">Delete</a> |
                <a href="/home/details/customer/{{ $list[$i]['id'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</center>  

<br>

    {{session('msg')}}

@endsection