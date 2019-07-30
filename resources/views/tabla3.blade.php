@extends("index")

@section('contenido')

<div class="col">
        <center><h3>Lista 3: Potreros (NDVI - Fecha)</h3></center>
        <br>
        <ul>
                <li class="list-group-item list-group-item-dark"><b>Nombre: </b>{{$user->Username}}</li>
                <li class="list-group-item list-group-item-dark"><b>RUT: </b>{{$user->RUT_usuario}}</li>
               @foreach($potreros as $p)
                    <ul>
                            <li class="list-group-item list-group-item-dark"><b>ID Potrero: </b>{{$p->ID_potrero}}</li>
                            <li class="list-group-item list-group-item-dark"><b>Superficie: </b>{{$p->superficie}} m2</li>
                            <li class="list-group-item list-group-item-light"><b>Fecha: </b>{{$p->fecha}}</li>
                            <li class="list-group-item list-group-item-light"><b>Disponibilidad: </b>{{$p->ndvi}}</li>
                    </ul>
               @endforeach
            </li>
        </ul>
  </div>
@endsection
