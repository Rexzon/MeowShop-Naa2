@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        @foreach($product as $product)
<div class="row">
        <div class="card-produl">
            <img src="{{ asset('uploads/products/'.$product->Pimage)}}" style="height: 11rem;">
            <div class="card-body ">
                <p> ชื่อ {{$product->Pname}}</p>
                <p> ราคา {{$product->Price}} บาท</p>
                <div class="d-flex justify-content-end ">
                    <a href='/productdel/del/{{$product->id}}' style="color:white"  class="btn btn-success">DELETE</a>|
                    <a href='/productedit/{{$product->id}}' style="color:white"  class="btn btn-success">EDIT</a><br>
                </div>
</div>
            </div>
        </div>
        <hr> <br>
        @endforeach
    </div>
</body>

</html>
@endsection