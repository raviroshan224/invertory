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

        button {

            background-color: darkorange;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 45%;
            align-self: center;

        }

        a {
            font-size: 20px;
            color: black;
        }
    </style>


</head>

<body>
    <h1 class="welcome">Edit Product</h1>
    <form method="post" action="{{ route('productupdate', ['id'=>$product->id]) }}">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name"  value="{{$product->name}}">

        <label>Rate</label>
        <input type="text" name='rate' value="{{$product->rate}}">

        <button type="submit">Update</button>
    </form>
</body>

</html>
