<!DOCTYPE html>
<html>

<head>
    <title>Inventory</title>
    <style>
        .welcome {
            text-align: center;
            font-size: 42px;
            margin-bottom: 6%;
        }

   
        
        div{
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            margin-left: 45%;
            display: flex;
            flex-direction: column;
            font-size: 32px;
            

        }
        a {
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            margin-left: 47%;
            margin-top: 28px;
            display: flex;
            flex-direction: column;
            font-size: 28px;
            
            

        }
    </style>


</head>

<body>
    <h1 class="welcome">View Product</h1>

    <div>
        <label>Name: {{ $product->name }}</label>


        <label>Rate: {{ $product->rate }}</label>

    </div>


    <a href="{{ route('product') }}">Done</a>

</body>

</html>
