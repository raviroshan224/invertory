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

        .product {
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
    <h1 class="product">Product</h1>

    <button class="add"><a href="{{ route('productcreate') }}">Add</a></button>
    <table>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Rate</th>
            <th>Action</th>
        </tr>


        @php
        $count = 1;
    @endphp
        @foreach ($products as $product)
  
        <tr>
        
           

    
    
    
                <td>{{ $count}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->rate }}</td>
                <td>

                    <button><a href="{{ route('productview', ['id' => $product->id]) }}">View</a></button>

                    <button><a href="{{ route('productedit', ['id'=> $product->id] ) }}">Edit</a></button>
                    
                    <button><a href="{{ route('productdestroy', ['id' => $product->id]) }}"
                        onclick="event.preventDefault(); document.getElementById('asd-{{ $product->id }}').submit();">DELETE</a></button>

                    <form id="asd-{{ $product->id }}" action="{{ route('productdestroy', ['id' => $product->id]) }}"
                        method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
                @php
                $count++;
            @endphp
            </tr>
        @endforeach






    </table>
</body>

</html>
