@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

@if(session('success'))
<div class = "alert alert-success">
    {{session('success')}}
    </div>  
@endif

    <div class ='container'>
        
    adminhistory<br><br>
    <div class="card conn">
    @foreach($History as $History)
    
    ชื่อ {{$History->username}}
    E-mail {{$History->email}}
    E-mail {{$History->address}}
    E-mail {{$History->item}}
    E-mail {{$History->totalprice}}

    <a href ='/historydelete/{{$History->id}} ' style ="color:red"  >Delete</a>

     <hr> <br><br>
     <div>
    </div>
    @endforeach
    
</body>
</html>
@endsection