@extends("index")

@section('contenido')

<div class="col">
        <center><h3>Lista 3: Potreros (NDVI - Fecha)</h3></center>
        <br>
        <p>{{$user->RUT_usuario}}</p>
        @foreach($potreros as $p)
        <ul>
            <li class="list-group-item list-group-item-dark"><b>ID Potrero: </b>{{$p->ID_potrero}}</li>
            <li class="list-group-item list-group-item-dark"><b>Superficie: </b>{{$p->superficie}} m2</li>
            <li class="list-group-item list-group-item-light"><b>Fecha: </b>{{$p->fecha}}</li>
            <li class="list-group-item list-group-item-light"><b>Disponibilidad: </b>{{$p->ndvi}}</li>
               <!--@foreach($potreros as $potrero)
                    <ul>
                        <li class="list-group-item list-group-item-light"><b>Fecha: </b>{{$potrero->fecha}}</li>
                        <li class="list-group-item list-group-item-light"><b>Disponibilidad: </b>{{$potrero->ndvi}}</li>
                    </ul>
               @endforeach-->
            </li>
        </ul>
        @endforeach
  </div>
@endsectionex
