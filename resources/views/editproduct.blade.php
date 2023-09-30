<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Product page</h1>
    <a href="{{route('index')}}"><button> Dashboard </button> </a>

    <form method="post" action="{{route('update', ['product' => $product])}}">
        @csrf
        @method('put')
       
        <div class="info">
            <label>
                Name
                <input class="fname" type="text" name="name" placeholder="Full name" value="{{$product->name}}">
                <br>
                <br>

            </label>
            <label>
                Qty
                <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
                <br>
                <br>

            </label>
            <label>
                Price
                <input type="text" name="price" value="{{$product->price}}" placeholder="Price">
                <br>
                <br>

            </label>
        </div>
        <p>Description</p>
        <div>
         </div>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>

</html>