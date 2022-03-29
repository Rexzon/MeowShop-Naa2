@extends('layouts.app')
@section('content')

    <div class="container">
        History<br><br>

        
        <div class="row ">
            
            <div class="card">
            
                <div class="card-header">
                    ชื่อผู้สั่ง {{$user->name}}
                </div>
               
                <div class="card-body ">
                @foreach($user->Historys as $history)
                    <div class="row g-3">
               

               
                        
                        <div class="col-md-5">
                            <h5 class="card-title">รายละเอียด  {{$history->item}}    </h5>
                        </div>
                        <div class="col-md-7">
                            <p class="card-title">ราคารวม {{$history->totalprice}} บาท</p>
                        </div>
 
                    </div>
                    @endforeach               
                    <div class="row  justify-content-end card-footer">
                        <div class="col-2">
                            <a href="/dashboard" class="btn btn-primary">สั่งซื้ออีกครัง</a>
                            
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        

    </div>



@endsection