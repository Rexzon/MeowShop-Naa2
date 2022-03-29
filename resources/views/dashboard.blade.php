@extends('layouts.app')

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif


@section('content')

<div class="container ">
    <div class="div-pir">
        <div class="div-sld">

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://f.ptcdn.info/421/030/000/1429238478-1042608710-o.jpg?fbclid=IwAR3E0e8V22rY7fJGLuXfdl61cq0nKfiKVc9p1w5vaLOBEONqqbDN6ryubZg"  alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://image.bestreview.asia/wp-content/uploads/2020/05/best-cat-toys.jpg?fbclid=IwAR2E-H-LPhhDoqLvwWl8mrt1WGZu5LiRncv4KPwAtaSWF6OBYgUf9411DAU"  alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://petsayhai.com/wp-content/uploads/2021/05/10-%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%9A-%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B9%81%E0%B8%A1%E0%B8%A7-%E0%B8%A2%E0%B8%B5%E0%B9%88%E0%B8%AB%E0%B9%89%E0%B8%AD%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B4%E0%B8%A2%E0%B8%A1.jpeg?fbclid=IwAR3MKwImHIfNFfRYGnsVv1FJVShjON8xK7nG_1tMnKM1oHYQUMgQvgOQC9E"  alt="...">
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
        <div class="div-c">
        <img src="https://cf.shopee.co.th/file/f93999104dea484b09afbf2627edd7f6_xhdpi?fbclid=IwAR1ZZIqfAfJaS5Vk2MqVRfPxjygbAo5O4PrxUUBEpxtbO6ytXBQeHNau2r8"  alt="...">

        <img src="https://image.bestreview.asia/wp-content/uploads/2020/05/best-cat-toys.jpg?fbclid=IwAR2E-H-LPhhDoqLvwWl8mrt1WGZu5LiRncv4KPwAtaSWF6OBYgUf9411DAU"  alt="...">

            </div>

    </div>

    
    <div class="content-co">
   
    
        <div class="row">
        @foreach($product as $pro)
            <div class="col-md-3">
            
                <div class="card-sl mb-4" >
                    <div class="card-image">
                        <img src="{{ asset('uploads/products/'.$pro->Pimage)}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="card-heading">
                    {{$pro->Pname}}
                    </div>
                    <div class="card-text">
                    {{$pro->description }}
                    </div>
                    <div class="card-text">
                    ราคา {{$pro->Price}} บาท
                    </div>
                    <form action = "order/create" method ="Post" >
                        @csrf
                        <input type = "hidden" name ="id" value="{{$pro->id}}">
                        <input type = "hidden" name ="name" value="{{$pro->Pname}}">
                        <input type = "hidden" name ="email" value="{{$user->email}}">
                        <input type = "hidden" name ="price" value="{{$pro->Price}}">
                        <input type = "hidden" name ="userid" value="{{$user->id}}">
                        <input type="submit" value="AddtoCart" class="card-button">
                    </form>
                </div>
            </div>
            @endforeach 
        </div> 
            
    </div>
   
</div>

@endsection