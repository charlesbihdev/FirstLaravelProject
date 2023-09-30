<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products page</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>products page here</h1>
    <a href="{{route('create')}}"><button> Create </button> </a>
    <table>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>description</th>
        <th>Edit</th>
        <th>Delete</th>
        <tbody>
             
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif

            @foreach ($products as $product)
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>
              <a href="{{route('edit', ['product' => $product])}}" > Edit</a>
             </td>
             <td>
                <form method="post" action={{route('destroy', ['product' => $product])}}>.
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete"/>
                </form>

             </td>
        </tbody>
        @endforeach
    </table>
</body>

</html>