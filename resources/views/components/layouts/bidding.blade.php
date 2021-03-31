<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title??'Document'}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="h-24 bg-primary items-center flex justify-center">
    <div class="w-10/12 items-center flex justify-between px-5">
        <h1 class="text-2xl font-bold text-white tracking-widest">Auctions</h1>
        <input type="text" name="search" class="px-2 py-1 rounded-3xl border border-gray-800 outline-none" placeholder="search">
    </div>
</div>
<div class="flex justify-center">
    @yield('content')
</div>
</body>
</html>
