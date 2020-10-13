<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield("app-title")</title>
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-sm navbar-dark">
    <h3>@yield("page-title")</h3>
    <ul class="navbar-nav ml-md-auto">
        <li class="nav-item">
            <a href="/" class="nav-link">Main Page</a>
        </li>
        <li class="nav-item">
            <a href="/personalArea" class="nav-link">Personal Area</a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link">About</a>
        </li>
    </ul>
</nav>
@yield("page-content")
</body>
</html>
