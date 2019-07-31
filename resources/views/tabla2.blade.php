@extends("index")

@section('contenido')
<div class="row">
    <div class="col">
        <center><h3>Lista 2: Predios con Usuarios y Subusuarios</h3></center>
        <br>
        @foreach($predios as $predio)
        <ul>
            <li class="list-group-item list-group-item-dark"><b>ID Predio: </b>{{$predio->ID_Predio}}</li>
            <li class="list-group-item list-group-item-dark"><b>Localización: </b>{{$predio->Localizacion}}</li>
            <li class="list-group-item list-group-item-dark"><b>Rut Usuario: </b>{{$predio->users->RUT_usuario}}</li>
                @foreach($predio->subusers as $subuser)
                    <ul>
                        <li class="list-group-item list-group-item-light"><b>Rut Sub Usuario: </b>{{$subuser->RUT_subusuario}}</li>
                    </ul>
               @endforeach
            </li>
        </ul>
        @endforeach
    </div>
</div>
@endsection
