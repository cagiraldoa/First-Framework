@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8" />
  <link type="text/css" rel="stylesheet" href="css/style_.css">

</head>

<body>

  <h1 class="Title">UNIT CONVERTER
    <button class="Persistence" type="button">
      <a href="/persistence">PERSISTENCE</a>
    </button>
  </h1>



  <div class="Cuerpo">
    <div class="Forms">
      <form action="result" method="post">
        @csrf

        <p>

          ENTER THE VALUE: <br><br><input class="Ingresa" type="number" step="any" name="Valor">
        </p>

    </div>


    <div class="Forms2">

      <p>

        CHOOSE UNIT TYPE 1:
      </p>

      <select name="Unit_1">
        <option value="0">Millimeters</option>
        <option value="1">Centimeters</option>
        <option value="2">Decimeters</option>
        <option value="3">Meters</option>
        <option value="4">Decameters</option>
        <option value="5">Hectometers</option>
        <option value="6">Kilometers </option>
      </select>
    </div>

    <div class="Forms3">

      <p>

        CHOOSE UNIT TYPE 2:
      </p>

      <select name="Unit_2">
        <option value="0">Millimeters</option>
        <option value="1">Centimeters</option>
        <option value="2">Decimeters</option>
        <option value="3">Meters</option>
        <option value="4">Decameters</option>
        <option value="5">Hectometers</option>
        <option value="6">Kilometers</option>
      </select>
    </div>

    <div class="Result">

      <input class="Ingresa2" type="submit" value="CALCULATE">
    </div>
    </form>

  </div>
</body>

</html>
@endsection