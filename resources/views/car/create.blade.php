<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Car ...</title>
</head>
<body>
<h1>Car</h1>
<form action="{{route('car.store')}}" method="post">
    <input type="text" name="make" value="{{!empty($car->make) ? $car->make: ''}}"  id="make">
    <input type="text" name="model" value="{{!empty($car->model) ? $car->model: ''}}" id="model">
    <input type="text" name="year" value="{{!empty($car->year) ? $car->year: ''}}" id="year">
    <input type="hidden" name="created_at" value="{{!empty($car->created_at) ? $car->created_at: ''}}" id="date_created">
</form>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/save.js')}}"></script>
</body>
</html>
