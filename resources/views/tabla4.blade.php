@extends("index")

@section('contenido')

<div class="col">
    <center><h3>Lista 4: Potrero con Mayor NDVI</h3></center>
    <br>
    <ul>
        <li class="list-group-item list-group-item-dark"><b>Rut Usuario: </b>{{$user->RUT_usuario}}</li>
        <li class="list-group-item list-group-item-dark"><b>ID Potrero: </b>{{$ndvimayor->ID_potrero}}</li>
        <li class="list-group-item list-group-item-dark"><b>NDVI: </b>{{$ndvimayor->ndvi}}</li>
    </ul>
  </div>
@endsection
