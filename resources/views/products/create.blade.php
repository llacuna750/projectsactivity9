<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Product
            </h2>
        </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        .whitebackground {
                background-color: white;
                height: 500px;
                /* margin: 3px; */
                padding: 10px;
            }
    </style>
</head>
<body>
<div class="whitebackground">
    <h1>Create a Product</h1>
    <div>
        @if($errors->any()) 
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Discription" />
        </div>

        <div>
            <input type="submit" value="Save a New Proudct" />
        </div>
    </form>
    <div >
</body>
</html>

</x-app-layout>