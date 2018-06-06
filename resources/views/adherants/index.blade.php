<!DOCTYPE html>
<html>
<head>


    <title></title>
</head>
<body>

@include('layout.layout')


<div class="container">

<ul id="liste">
    @foreach ($adherants as $adherant)
    <a href="/adherants/{{$adherant->id}}">
        <div class ="event">
            <div class="titreEvent">{{$adherant->first_name}} {{$adherant->last_name}} </div>
            <ul>
                <li><b>id :</b> {{$adherant->id}} </li>
                <li><b>Email :</b> {{$adherant->email}} </li>

                <li><b>n°licence :</b> {{$adherant->licence_number}} </li>
            </ul>

<!--    {{csrf_field()}}
    {{method_field('DELETE')}}
  <button type="submit" class="btn btn-default">Submit</button>

</form>   
<a href = 'delete/{{ $adherant->id }}'>Delete</a>     -->    


          

    </div>
  </a>


    @endforeach
</ul>

</div>


</body>
</html>