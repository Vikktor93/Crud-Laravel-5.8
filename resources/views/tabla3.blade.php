@extends("index")

@section('contenido')

<div class="col">
        <center><h3>Lista 3: Potreros (NDVI - Fecha)</h3></center>
        <br>
        @foreach($user as $u)
        <ul>
            <li class="list-group-item list-group-item-dark"><b>RUT:</b>{{$u->predio->RUT_usuario}}</li>
                @foreach($u->disponibilidad as $potrero)
                    <ul>
                        <li class="list-group-item list-group-item-light"><b>Potrero:</b>{{$potrero->ID_potrero}}</li>
                        <li class="list-group-item list-group-item-light"><b>Fecha:</b>{{$potrero->disponibilidad->fecha}}</li>
                        <li class="list-group-item list-group-item-light"><b>Disponibilidad:</b>{{$potrero->disponibilidad->ndvi}}</li>
                    </ul>
               @endforeach
            </li>
        </ul>
        @endforeach
  </div>
@endsection
