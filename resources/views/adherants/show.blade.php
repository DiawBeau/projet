<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@include('layout.layout')

<div class="container">
	<div class="row">
		<div class="col-md-">
		<h1>{{$adherant->last_name}}</h1>

	<a href = 'delete/{{ $adherant->id }}'>Delete</a>

</div>



</body>
</html>