<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Yak Hunt</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>

@include('layouts.partials.navigation');

<div id="content">
    @yield('content')
</div>

<div class="container">
</div>

<div class="footer">
    <div class="container">
        <p class="text-muted">&copy; 2014 <a href="https://drewhammond.me">Drew Hammond</a></p>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>