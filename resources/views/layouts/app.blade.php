<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <style>
        .active{
            color: red;
        }
    </style> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    {{-- {{ nhap tu ben ngoai }} --}}
    @include('layouts.header') 
    {{-- {{ index.blade.php is the master page }}
    {{ index.blade.php is the child page }}
    {{ about.blade.php is the child page }} --}}
    {{-- {{ dai dien, tai cho nay co noi dung }} --}}
    @yield('content') 
    @include('layouts.footer')
    </div>
</body>
</html>