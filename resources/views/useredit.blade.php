@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card .content-user {
            padding-top: 20px;
            position: relative;
            /* width: 100%; */
            display: grid;
            min-height: 500px;
            background: var(--white);
            padding: 20px;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        .container {
            width: 100%;
            height: 100vh;

        }

        .card {
            position: relative;
            max-width: 70%;
            margin-left: 13%;
            padding: 20px;
            margin-top: 10px;
            
        }

        .card-header h2 {
            font-weight: 600;
            color: rgb(42, 42, 252);

        }
        .input{
            display: flex;
            
            justify-content: center;
            flex-wrap: wrap;
            
        }
        .input-name{
            margin-right: 50px;
            display: grid;
        }
        .input-email{
            margin-left: 50px;
            display: grid;
        }
        .input-name input{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 10px;
            margin-top: -40px;
            background:rgb(226, 226, 226);
        }
        .input-email input{
            background:rgb(226, 226, 226);
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 10px;
            margin-top: -40px;
        }
       .content-user button{
            width: 100px;
            height: 30px;
            margin: 0 auto;
            margin-top:50px;
            border-radius: 3px;
            border:none;
            background:rgb(42, 42, 252);
            color:white;
            transition: 0.3s ease;
       }
       .content-user button:hover{
            background: #c97eeb;
            color:black;
            cursor: pointer;
       }


        

    </style>

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="content-user">
                <div class="card-header">
                    <h2>User Edit</h2>

                </div>
                <form action ="{{ url('update/user/'.$useredit->id) }}" method ="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="input">
                    <div class="input-name">
                        <label for="Name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" placeholder="Name" value = '{{$useredit->name}}' name = 'name' required>
                    </div>

                    <div class="input-email">
                        <label for="Email" class="form-label">Email</label>
                        <input id="firstname" type="text" class="form-control" placeholder="Email" value = '{{$useredit->email}}' name = 'email' required>
                    </div>



                    
                </div>
                
                <button type="submit"> Edit</button>
                 </form>


            </div>


        </div>



</body>

</html>
@endsection