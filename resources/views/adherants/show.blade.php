@include('layout.layout')

<div class="container">
	<div class="row">
		<div class="col-md-">
			<h1>{{$adherant->last_name}} {{$adherant->first_name}}</h1>
			<h4>{{$adherant->email}}</h4>
			<h4>{{$adherant->licence_number}}</h4>
			<h4>créé à : {{$adherant->created_at}}</h4>
			<h4>mis à jour à : {{$adherant->updated_at}}</h4>

			<a href='delete/{{ $adherant->id }}'>Delete</a>
			<a href='/adherants/edit/{{$adherant->id}}'>Modifier</a>
		</div>
	</div>
</div>

</body>
</html>