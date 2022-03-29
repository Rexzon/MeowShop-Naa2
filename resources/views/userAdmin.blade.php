
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0eca6d39f.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

     


        .header-container {
            height: 100px;

            padding-left: 15%;
            display: flex;
            background-color: #DDA0DD;
            justify-content: start;
            align-items: center;
        }

        .content {
            margin-left: 40px;
            color: rgb(255, 255, 255);
        }

      

        .card .content-user {
            position: relative;
            width: 100%;
            display: grid;
            min-height: 500px;
            background: var(--white);
            padding: 20px;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }

        .card-header h2 {
            font-weight: 600;
            color: rgb(42, 42, 252);

        }

        .card table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;

        }

        .card table thead td {
            font-weight: 600;
        }

        .card .content-user table tr {
            transition: 0.2s ease;
            border-bottom: 1px solid rgb(0, 0, 0, 0.1);
        }

        .card .content-user table tr:last-child {
            border-bottom: none;
        }

        .edit-btn {
            padding: 4px;
            background-color: #DDA0DD;
            color: black;
            border-radius: 2px;
            border: none;
            transition: 0.5s ease;
        }

        .edit-btn:hover {
            background-color: white;
        }

        .delete-btn:hover {
            background-color: red;
            color: white;
        }

        .delete-btn {
            padding: 4px;
            background-color: #DDA0DD;
            color: black;
            border-radius: 2px;
            border: none;
            transition: 0.5s ease;
        }

        .card .content-user table tbody tr:hover {
            background-color: rgb(174, 174, 233);
            color: white;
        }

        .card .content-user table tr td {
            padding: 10px;
        }

        .card .content-user table tr td:last-child {
            text-align: end;
        }

        .status {
            padding: 2px 4px;
            background: #8ed20c;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
    <!-- <link rel="stylesheet" href="chrckout.css"> -->
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header-container">

            <i class="fa-solid fa-user-gear fa-2xl"></i>
            <div class="content">
                <h3>User Edit</h3>
                <p>for edit user details and delete</p>
            </div>

        </div>
        <div class="card">
            <div class="content-user">
                <div class="card-header">
                    <h2>Manage User</h2>

                </div>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Edit</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $user)
                        <tr>
                        
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td> {{$user->email}}</td>
                           
                            <td>
                                <button  class="edit-btn"><a href ='/useredit/{{$user->id}}' style ="color:green  ">EDIT</a></button>
                                <button href = '/userdelete/{{$user->id}}' class="delete-btn"><a href ='/userdelete/{{$user->id}} ' style ="color:red">Delete</a></button>

                            </td>
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>




        </div>





    </div>

</body>

</html>
@endsection