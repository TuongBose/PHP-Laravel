<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    {{-- Now add bootstrap 5 to header --}}
    @include('layouts.header')
    <div style="background-color:aqua;height:100px">
        <p>This is Header</p>
    </div>
    {{-- app.blade.php is the master page --}}
    {{-- index.blade.php is the child page --}}
    {{-- about.blade.php is the child page --}}
    @yield('content')
    @include('layouts.footer')
</body>
</html>