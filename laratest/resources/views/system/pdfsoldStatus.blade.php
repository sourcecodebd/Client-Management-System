<div style="background-color:rgba(205, 217, 224, 0.808);">

<h1 style="color: green">Sales Log <br> {{ session('email') }} </h1>

    <br><br>
    {{session('msg')}}

    <center>
        <div style="color: red;
                    font-size:30px;
                    font-family: Arial, Helvetica, sans-serif;">ClientManagement.com
        </div>
        <h2 style="font-family: Arial, Helvetica, sans-serif;">Sold Items of last 7 Days</h2>
    </center>
 
    <br><br>

<div style="
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: Arial, Helvetica, sans-serif;
    font-size:10px;
	border: 2px solid white;
	background-color: white;">

    <table width=100% border="1" style="text-align:center">

        <tr>
            <td>Id</td>
            <td>Customer Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
            <td>Created At</td>
            <td>Updated At</td>

        </tr>

            @foreach ($sales as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i->customer_name}}</td>
                <td>{{$i['customer_address']}}</td>
                <td>{{$i['phone']}}</td>
                <td>{{$i['product_id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['quantity']}}</td>
                <td>{{$i['total_price']}}</td>
                <td>{{$i['date_sold']}}</td>
                <td>{{$i['payment_type']}}</td>
                <td>{{$i['status']}}</td>
                <td>{{$i['created_at']}}</td>
                <td>{{$i['updated_at']}}</td>
                
            </tr>
            @endforeach     
    </table>
</div>

<div style="font-family: Arial, Helvetica, sans-serif; margin-left: 620px">
<h3 style="margin:0%"><br>Regards,<br> 
{{session('username')}}</h3>
</div>

<h3 style="color: darkblue; text-align: center"> Home | Sales Log </h3>
</div>