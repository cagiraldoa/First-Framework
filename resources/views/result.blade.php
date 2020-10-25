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

	<h1 class="Title">UNIT CONVERTER
		<button class="Persistence" type="button">
			<a href="/persistence">PERSISTENCE</a>
		</button>
	</h1>

	<div class="Resultado_final">

		{{$resultado}}


	</div>

</body>

</html>
@endsection