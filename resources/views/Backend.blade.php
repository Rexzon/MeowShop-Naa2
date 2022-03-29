@extends('layouts.app')
@section('content')

<div class="container ">
    <section class="home-section">

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box" >
                    <div class="right-side" >
                       
                        <div class="number" ><a  href="/Backendproduct">NEW PRODUCT</a></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">for add product</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="number" ><a  href="/userAdmin">USER MANAGE </a></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">edit,delete user</span>
                        </div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
                

            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Sales</div>
                    <div class="sales-details">
                    <ul class="details">
                            <li class="topic">User</li>
                            
                        </ul>
                        <ul class="details">
                            <li class="topic">Product</li>
                         
                        </ul>
                        <ul class="details">
                            <li class="topic">Total</li>
                           
                        </ul>
                        </div>
                    @foreach($History as $History)
                    
                    <div class="sales-details">
                    
                        <ul class="details">
                           
                            {{$History->username}}
                        </ul>
                        <ul class="details">
                            
                            {{$History->item}}
                        </ul>


                        
                        <ul class="details">
                          
                            {{$History->totalprice}}
                        </ul>

                   
                    </div>
                    @endforeach

                </div>


                <div class="top-sales box">
                    <div class="title">All PRODUCT</div>
                    <ul class="top-sales-details">
                    @foreach($product as $product)
                        <li>
                        
                            <a href="#">
                                <img src="{{ asset('uploads/products/'.$product->Pimage)}}"
                                    alt="">
                                <span class="product">{{$product->Pname}}</span>
                            </a>
                            
                                <span class="price" style="color:green;">Delete</span>
                                
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>
</div>
@endsection