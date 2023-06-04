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
    <h1 class="welcome">Edit Customer</h1>
    <form method="post" action="{{ route('customerupdate', ['id'=>$customer->id]) }}">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name"  value="{{$customer->name}}">

        <label>Number</label>
        <input type="text" name='phone' value="{{$customer->phone}}">

        <label>Address</label>
        <input type="text" name='address' value="{{$customer->address}}">

        <button type="submit">Update</button>
    </form>
</body>

</html>
