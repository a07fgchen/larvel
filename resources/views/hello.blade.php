<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>Larvel-@yeild('title')</title>
    <style>
    
    </style>
</head>
<body>
    @section('sidebar')
    這是主要側邊攔
    @show
    <h1>HelloWorld</h1>
    <div class="container">
        @yield('content')
    </div> 
</body>
</html>