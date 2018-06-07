@include('layout.layout')

<div class="container">

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
</div>

<div id="accordion">
    <div class="card">
        @foreach ($adherants as $adherant)
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$adherant->id}}" aria-expanded="false" aria-controls="collapse">
                    {{$adherant->first_name}} {{$adherant->last_name}}
                </button>
            </h5>
        </div>
        <div id="{{$adherant->id}}" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <div class="card-body">
                <h4>{{$adherant->email}}</h4>
                <h4>{{$adherant->licence_number}}</h4>
                <h4>{{$adherant->created_at}}</h4>
                <h4>{{$adherant->updated_at}}</h4>

                <form method="POST" action="delete/{{ $adherant->id }}">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <button type="submit">Supprimer</button>
              </form>
              <a href='/adherants/edit/{{$adherant->id}}'>Modifier</a>
          </div>
        </div>
        @endforeach 
    </div>
</div>
