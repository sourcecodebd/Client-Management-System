<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<body>

<div class="title">
 	<div class="align">
    	<div class="sign">
      		<span class="fast-flicker">Client&nbsp;&nbsp;</span>Management&nbsp;&nbsp;<span class="flicker">System</span>
    	</div>
	</div>
</div>

<h1>Login</h1>

<a href="{{route('Creg.index')}}">Customer Registration</a>
<br><br>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Login</legend>
	<center>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td><input type="submit" class="btn" name="submit" value="Submit" ></td>
					<td></td>
				</tr>
			</table>
	</center>
		</fieldset>
	</form>

	<br>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

    {{session('msg')}}

	@extends('layout.footer')

</body>
</html>
