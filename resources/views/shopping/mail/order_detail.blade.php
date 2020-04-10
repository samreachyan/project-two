<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
		.shopping {
			padding: 15px 10px;
		}
		.shopping h2 {
			background-color: #03fc2c;
			color: #fff;
			font-size: 2em;
			text-align: center;
			padding: 15px;
		}
		table {
			border-collapse: collapse;
		}
		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
        th {
            background-color: #4287f5;
            color: #fff;
        }
		#forBold {
			text-align: right;
			font-weight: bold;
			color: #fff;
            background-color: #000;
		}
        #forTotal {
			text-align: right;
			font-weight: bold;
			color: red;
		}
	</style>
</head>
<body>
	
<div class="shopping">
    <h2>SAMREACH SHOP</h2>
    <p>Thanks you for your order from vietpro shopping on samreach.com</p>
    
    <p>Name : {{ $order->full }}</p>
    <p>Address : {{ $order->address }} </p>
    <p>Phone : {{ $order->phone }}</p>
    <table style="border-collapse: collapse; border=1px solid #000">
        <tr style="background-color: #0339fc; color: #fff; border=1px solid #000">
            <th>Name</th>
            <th>Product Code</th>
            <th>Price</th>
            <th>Quanity</th>
            <th>Total</th>
        </tr>
        @foreach ($order->prd_order as $row)
            <tr>
                <td> {{ $row->name }} </td>
                <td> {{ $row->code }} </td>
                <td> {{ number_format($row->price, 0,'','.') }} VNĐ </td>
                <td> {{ $row->quantity }}</td>
                <td> {{ number_format($row->price*$row->quantity, 0,'','.') }} VNĐ</td>
            </tr>
        @endforeach
        <tr>
            <td id="forBold" colspan="4"> Total All </td>
            <td id="forTotal" > {{number_format($order->total, 0,'','.') }} VNĐ </td>
        </tr>
    </table>
    <h4> Your order will delivery as soon as possible. Thanks you!!!</h4>
    </div>
</body>
</html>