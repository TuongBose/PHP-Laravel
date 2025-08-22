<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function of ProductController</h1>   
    {{-- Option 1
    <h2>Title: {{ $title }}</h2>
    <h3>X: {{ $x }}</h3>
    <h3>Y: {{ $y }}</h3> --}}

    {{-- Option 2
    <h3>Name: {{ $name}}</h3> --}}

    {{-- @foreach ($myphone as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}

    {{-- @foreach ($product as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}

    {{-- {{ $products }} --}}

    <a href="{{ route('products') }}">Link to products</a>
</body>
</html>