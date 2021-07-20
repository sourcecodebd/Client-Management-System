<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="title">
 	<div class="align">
    	<div class="sign">
      		<span class="fast-flicker">Client&nbsp;&nbsp;</span>Management&nbsp;&nbsp;<span class="flicker">System</span>
    	</div>
	</div>
</div>

<h1>Create New Account</h1>

<a href="{{route('login.index')}}">Login</a>
<br><br>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Registration</legend>
		<center>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="full_name" value="{{old('full_name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name='user_type'>
							<option value="Customer"> CUSTOMER </option>
							<option value="Admin"> ADMIN </option>
							<option value="Vendor"> VENDOR </option>
							<option value="Sales"> SALES </option>
							<option value="Accountant"> ACCOUNTANT </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td><input type="date" name="date_added" value="{{old('date_added')}}"></td>
				</tr>
				<tr>
					<td>Upload Image </td>
					<td><input type="file" name="myfile"  value="{{old('myfile')}}"></td>
				</tr>
				<td><input type="submit" class="btn" name="submit" value="Register"></td>
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
