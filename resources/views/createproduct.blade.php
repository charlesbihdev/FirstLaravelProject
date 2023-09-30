<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        @if($errors->any())

        @endif
    </div>
    <h1>create products</h1>
    <a href="{{route('index')}}"><button> Dashboard </button> </a>

    <form method="post" action="{{route("store")}}">
        @csrf
        @method('post')
        <div class="info">
            <label>
                Name
                <input class="fname" type="text" name="name" placeholder="Full name">
                <br>
                <br>

            </label>
            <label>
                Qty
                <input type="text" name="qty" placeholder="Qty">
                <br>
                <br>

            </label>
            <label>
                Price
                <input type="text" name="price" placeholder="Price">
                <br>
                <br>

            </label>
        </div>
        <p>Description</p>
        <div>
            <input type="text" name="description" placeholder="Enter description">
        </div>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>

</html>