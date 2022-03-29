@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<div class="container">
    <div class="py-5 text-center">
        <img class="mb-4 d-block mx-auto" src="https://i.ibb.co/3FcZwqM/logo.png" alt="" width="190" height="180">
        <h2>Checkout form</h2>
        <p class="lead" >ชำระเงินตรงนี้เลยครับทาสทั้งหลาย</p>
    </div>

    <div class="container">
        <h4 class="mb-3">Information</h4>
        <form action ="/purchaseHistory" method ="post" enctype="multipart/form-data">
        @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Username</label>
                    <input id="firstname" type="text" class="form-control" placeholder="Username" value= "{{$user->name}}" required>
                    <div class="invalid-feedback">
                        ต้องใส่ชื่อ
                    </div>
                </div>  
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Email</label>
                    <input id="firstname" type="email" class="form-control" placeholder="E-mail" value= "{{$user->email}}" required>
                    <div class="invalid-feedback">
                        email
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="province" class="form-label">จังหวัด</label>
                    <select id="username" class="form-control" name="city">
                        <option value="">Choose...</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="district" class="form-label">อำเภอ</label>
                    <select id="username" class="form-control" name="town">
                        <option value="">Choose...</option>
                        <option value="เมือง">เมือง</option>
                        <option value="ไม่เมือง">ไม่เมือง</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="postcode" class="form-label" >รหัสไปรษณีย์</label>
                    <input type="number" id="postcode" class="form-control" placeholder="1234..." name="Zip" required>
                    <div class="invalid-feedback">
                        ใส่รหัสไปรษณีย์
                    </div>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Payments</h4>

                <div class="form-check">
                    <input id="creditCard" name="payment" type="radio" class="form-check-input" checkedrequired>
                    <label for="creditCard">Credit Card</label>
                </div>
                <div class="form-check">
                    <input id="creditCard" name="payment" type="radio" class="form-check-input" checkedrequired>
                    <label for="Debit">ธนาคาร</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="payment" type="radio" class="form-check-input" checkedrequired>
                    <label for="paypal">PayPal</label>
                </div>

                <div class="row my-3 gy-3">
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">
                            Name on Card
                        </label>
                        
                        <input id="fullname" type="text" class="form-control" name = "nc"> 
                        <small class="text-muted">
                            Full name on card.
                        </small>
                        <div class="invalid-feedback">
                            Name is required.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="fullname" class="form-label">
                            Credit Card Number
                        </label>
                        
                        <input id="cc-number" type="text" class="form-control" name = "cn">
                        <div class="invalid-feedback">
                            Name is required.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expire" class="form-label">
                            Expiration
                        </label>
                        
                        <input id="cc-expire" type="text" class="form-control" name = "expire">
                        <div class="invalid-feedback">
                            Expiration is required.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">
                            CVV
                        </label>
                        
                        <input id="cc-cvv" type="text" class="form-control" name = "cvv">
                        <div class="invalid-feedback">
                            CVV is required.
                        </div>
                    </div>

                </div>

                <hr class="my-4">
                <input type = "hidden" name ="email" value="{{$user->email}}">
  <input type = "hidden" name ="userid" value="{{$user->id}}">
  <input type = "hidden" name ="username" value="{{$user->name}}">
  <input type = "hidden" name ="email" value="{{$user->email}}">    

                <button class="btn btn-primary btn-lg btn-block" type ='submit'>Checkout</button>
            </div>

        </form>
    </div>
        

        

</div>






</body>
</html>
@endsection