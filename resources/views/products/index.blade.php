<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is index of Prodects</h1>
    {{-- <h1>Title: {{ $title }}</h1>
    <h2>x= {{ $x }}</h2>
    <h2>y= {{ $y }}</h2>
    <h3>Name: {{ $name }}</h3> --}}
    {{-- @foreach ($myphone as $item )
        <h3>{{ $item }}</h3>
    @endforeach --}}
    {{-- <h3>{{ $product }}</h3> --}}
    <a href="{{ route('products') }}">link to products</a>
</body>
</html>