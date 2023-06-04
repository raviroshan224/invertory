<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .logout{
            float: right;
            font-size: 28px;
            margin-top: -5%;
        }
        body{
            padding: 8%;
            text-align: center;
        }
        
        .welcome{
            /* margin-left: 40% */
            font-size: 55px;
            margin: 5%;
            margin-left: 10%

        }
        button{
            font-size: 34px;
            margin: 5%;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{route('logout')}}" >
        @csrf
        <button class="logout">Logout</button>
    </form>
    
    <h1 class="welcome">Welcome, {{ request('name') }}</h1>

    <button><a href="{{route('product')}}">Product</a></button>
    <button><a href="{{route('customer')}}">Customer</a></button>
</body>
</html>