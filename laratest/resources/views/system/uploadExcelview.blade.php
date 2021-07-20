@extends('layout.main')

@section('title')
    Home | Upload Excel
@endsection

@section('page_title')
    <h1>Upload Excel</h1>
@endsection

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('system.salesLog')}}">View Sales Log</a> |
    <br>
@endsection

@section('main_content')
    <center>

    <br>
        <form action="" method="POST" enctype= "multipart/form-data">
            @csrf
            <input type="file" name='file'>
            <div><input type="submit" class="uploadbtn" value="Submit"></div>
        </form>
    <br>
        @foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
    {{session('msg')}}
    </center>
@endsection