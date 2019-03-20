<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Simple CRUD Operation</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Satisfy" rel="stylesheet">
</head>
<body>
@include('shared.header')

@yield('content')

@include('shared.footer')
</body>
</html>