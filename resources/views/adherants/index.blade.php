@include('layout.layout')

<!-- <div class="container">

    <ul id="liste">
        @foreach ($adherants as $adherant)
        <div class ="event">
            <div class="titreEvent">{{$adherant->first_name}} {{$adherant->last_name}} </div>
            <ul>
                <li><b>id :</b> {{$adherant->id}} </li>
                <li><b>Email :</b> {{$adherant->email}} </li>

                <li><b>n°licence :</b> {{$adherant->licence_number}} </li>
                <li class="float-right">
                    <a href="/adherants/{{$adherant->id}}">
                        <button type="submit" class="btn btn-outline-primary">Plus de détails</button>
                    </a>
                </li>
            </ul>
        </div>
        @endforeach  
    </ul>
</div> -->

<div id="accordion" class="container">
    @foreach ($adherants as $adherant)
    <div class="card col-md-12">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$adherant->id}}" aria-expanded="false" aria-controls="collapse">
                    {{$adherant->first_name}} {{$adherant->last_name}}
                </button>
            </h5>
        </div>
        <div id="{{$adherant->id}}" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <div class="card-body">
                <h4>Email : {{$adherant->email}}</h4>
                <h4>N° licence : {{$adherant->licence_number}}</h4>
                <h4>Créé à : {{$adherant->created_at}}</h4>

                <!-- <a href='/adherants/edit/{{$adherant->id}}'>Modifier</a> -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#{{$adherant->last_name}}">Modifier</button>
            </div>
        </div>
    </div>

    <!-- Modal form edit -->
    <div class="modal fade" id="{{$adherant->last_name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{$adherant->first_name}} {{$adherant->last_name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form method="POST" action="/adherants/update/{{$adherant->id}}">
        <div class="modal-body">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <div class="form-group">
            <label for="first_name">Nom de l'adhérant</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value= "{{$adherant->first_name}}">  
        </div>

        <div class="form-group">
            <label for="last_name">Prénom de l'adhérant</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value= "{{$adherant->last_name}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value= "{{$adherant->email}}">
        </div>

        <div class="form-group">
            <label for="licence_number">N° licence</label>
            <input type="number" class="form-control" id="licence_number" name="licence_number" value= "{{$adherant->licence_number}}">
        </div>    

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Submit</button>
        <form method="POST" action="delete/{{ $adherant->id }}">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <button type="submit" class="btn btn-danger">Supprimer</button>
      </form>
  </div>
</form>
</div>
</div>
</div>
@endforeach 

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
  </li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item">
      <a class="page-link" href="#">Next</a>
  </li>
</ul>
</nav>
</div>

