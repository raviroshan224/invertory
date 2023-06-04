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

        label,
        input,
        button,
        a {
            justify-content: center;
            margin-left: 40%;

            display: flex;
            flex-direction: column;
            font-size: 24px;


        }

        input {
            margin-top: 4px;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .add{

            background-color: darkorange;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 45%;
            align-self: center;

        }

        .back {
            font-size: 20px;
            color: black;
           
            float: left;
        }
    </style>


</head>

<body>
    <div class="back">
    <a  href="{{route('product')}}">Back</a>
    </div>

    <h1 class="welcome">Add Product</h1>
    <form method="post" action="{{ route('productadd') }}">
        @csrf


        <label>Name</label>
        <input name="name" required>

        <label>Rate</label>
        <input name='rate' required>

        <button class="add">Add</button>
    </form>
</body>

</html>
