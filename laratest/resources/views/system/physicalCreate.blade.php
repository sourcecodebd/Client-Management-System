@extends('layout.nav_bar')

@section('title')
Home | Physical Store
@endsection

@section('page_title')    
<h1>Physical Store <br> {{ session('email') }} </h1>
@endsection

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('system.physicalCreate')}}">Physical Store</a> |
<a href="{{ route('system.salesLog') }}">View Sales Log</a> |
<a href="{{route('system.socialMedia')}}">Social Media</a> |
<a href="{{route('system.ecommerce')}}">E-Commerce Web App</a> |
<br><br>
@endsection

@section('main_content')
    <form method="post">
    	@csrf
		<fieldset>
			<legend>Product Sell</legend>

<center>

			<table>
				<tr>
					<td>Customer Name</td>
					<td><input type="text" name="customer_name" value="{{old('customer_name')}}"></td>
				</tr>
				<tr>
					<td>Customer Address</td>
					<td><input type="text" name="customer_address" value="{{old('customer_address')}}"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>Product Id</td>
					<td><input type="text" name="product_id" value="{{old('product_id')}}"></td>
				</tr>
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="unit_price" value="{{old('unit_price')}}"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
				</tr>
				<tr>
					<td>Total Price</td>
					<td><input type="text" name="total_price" value="{{old('total_price')}}"></td>
				</tr>
				<tr>
					<td>Date Sold</td>
					<td><input type="date" name="date_sold" value="{{old('date_sold')}}"></td>
					<td></td>
				</tr>
				<tr>
					<td>Payment Type</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name='payment_type'>
							<option value="Bkash"> BKASH </option>
							<option value="Nogod"> NOGOD </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name='status'>
							<option value="Sold"> SOLD </option>
							<option value="Pending"> PENDING </option>
						</select>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<td><input type="submit" class="btn" name="submit" value="Save"></td>
			</table>
</center>
		</fieldset>
	</form>

<br>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

    {{session('msg')}}


@endsection