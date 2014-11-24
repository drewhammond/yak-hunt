<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Yak Hunt</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/app.css">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGli0jH_sT_1PPKtEB98TdmeEcDHsqlXE"></script>
</head>
<body>

@include('layouts.partials.navigation');
<div class="row">
<div class="container-fluid map-container">

    <div class="col-sm-6">
        <div id="map-canvas"></div>
    </div>
    <div class="col-sm-6">
    Blah blah blah
    </div>
</div>

</div>


<div class="footer">
    <div class="container">
        <p class="text-muted">&copy; 2014 <a href="https://drewhammond.me">Drew Hammond</a></p>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/vendor/gmaps/gmaps.js') }}"></script>
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>