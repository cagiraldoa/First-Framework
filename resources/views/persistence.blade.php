@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="css/style_.css">
    <title>Result</title>
</head>

<body>

    <h1 class="Title2">YOUR PREFERENCES</h1>

    <div class="Tb2">
    <table class="Tabla">
        <tr>
            <td>MILIMETERS</td>
            <td>{{$milimeters}}</td>
        </tr>
        <tr>
            <td>CENTIMETERS</td>
            <td>{{$centimeters}}</td>
        </tr>
        <tr>
            <td>DECIMETERS</td>
            <td>{{$decimeters}}</td>
        </tr>
        <tr>
            <td>METERS</td>
            <td>{{$meters}}</td>
        </tr>
        <tr>
            <td>DECAMETERS</td>
            <td>{{$decameters}}</td>
        </tr>
        <tr>
            <td>HECTOMETERS</td>
            <td>{{$hectometers}}</td>
        </tr>
        <tr>
            <td>KILOMETERS</td>
            <td>{{$kilometers}}</td>
        </tr>
    </table>
    </div>

</body>

</html>
@endsection