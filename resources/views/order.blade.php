@extends('layouts.app')
@section('content')
<head>
<style>
    .small-order{
  margin: 80px auto;
}
table{
  width:100%;
  border-collapse:collapse;
}
.cart-info{
  display: flex;
  flex-wrap: wrap;
}
th{
  text-align:left;
  padding:5px;
  color:#fff;
  background:#ff523b;
  font-weight: normal;
}
td{
  padding: 10px 5px;
}
td input{
  width: 55px;
  height: 40px;
  padding: 5px;
}
td a{
  color:#ff523b;
  font-size: 12px;
}

td img{
  width: 120px;
  height: 120px;
  margin-right:10px;

}

</style>

</head>
<div class="container small-order">

    <table>
        <tr>
            <th>Product</th>
            
            <th>Subtotal</th>
        </tr>
        @foreach($user->orders as $carts)
        <tr>
            <td>
            

                <div class="cart-info">   
                    <div>
                        <p>ชื่อสินค้า {{$carts->Product_name}}</p>
                        <small>Price: {{$carts->Product_price}} บาท</small>
                        <br><br>
                        <a  href ='/cartdelete/{{$carts->id}} ' >Remove</a>
                    </div>
                </div>
            </td>            
            <td>{{$carts->Product_price}} บาท</td>
        </tr>
        @php
        $value = $value + $carts->Product_price
        @endphp      
        @endforeach
    </table>
    total price {{$value}}<br>
    <div class ='d-flex justify-content-end'>
    <a href ='/cartpurchase' style ="color:WHITE" class = 'btn btn-primary' >Purchase</a><br>
    </div>
    
</div>
@endsection