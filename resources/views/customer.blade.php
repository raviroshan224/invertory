<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    <style>
        body {
            padding-left: 10%;
            padding-right: 10%;

        }

        .customer {
            text-align: center;
            font-size: 44px;
        }

        .add {
            margin-left: 70%;
            font-size: 24px;
        }

        table {

            text-align: center;
            font-size: 24px;
            border: 1px solid black;
            margin-left: 15%;
            margin-top: 4%;
            width: 800px;
        }

        table button {
            font-size: 18px;
        }

        form {
            display: inline;
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
        <a  href="{{route('index')}}">Back</a>
        </div>
    <h1 class="customer">Customer</h1>

    <button class="add"><a href="{{ route('customercreate') }}">Add</a></button>
    <table>
        <tr style="border: 1px solod red">
            <th>S.N</th>
            <th>Name</th>
            <th>Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>



        @foreach ($customers as $customer)
            <tr>

                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{$customer->address}}</td>
                <td>

                    <button><a href="{{ route('customerview', ['id' => $customer->id]) }}">View</a></button>

                    <button><a href="{{ route('customeredit', ['id'=> $customer->id] ) }}">Edit</a></button>
                    
                    <button><a href="{{ route('destroy', ['id' => $customer->id]) }}"
                        onclick="event.preventDefault(); document.getElementById('asd-{{ $customer->id }}').submit();">DELETE</a></button>

                    <form id="asd-{{ $customer->id }}" action="{{ route('destroy', ['id' => $customer->id]) }}"
                        method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
            </tr>
        @endforeach






    </table>
</body>

</html>
