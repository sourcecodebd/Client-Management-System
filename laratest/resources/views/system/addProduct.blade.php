<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Add Product</title>
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

<h1>Add Product <br> {{ session('email') }}</h1>
	<a href="{{route('logout.index')}}">Logout</a> |
	<a href="{{route('system.product')}}">Product-Management</a> |
	<a href="{{route('product.Elist')}}">Existing Product List</a> |
	<a href="{{route('product.Ulist')}}">Upcoming Product List</a> |
    <a href="{{route('product.Pcreate')}}">Add Product</a> |
	
	<br><br>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
	<center>
			<table>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>Category</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name='category'>
							<option value="Grocery"> GROCERY </option>
							<option value="Medical"> MEDICAL </option>
                            <option value="Stationary"> STATIONARY </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="unit_price" value="{{old('unit_price')}}"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name='status'>
							<option value="Existing"> EXISTING </option>
							<option value="Upcoming"> UPCOMING </option>
						</select>
					</td>
				</tr>	
				<tr><td><br></td></tr>
                <td><input type="submit" name="submit" class="btn" value="Add Product"></td>
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