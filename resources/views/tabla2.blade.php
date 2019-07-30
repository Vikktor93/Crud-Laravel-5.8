@extends("index")

@section('contenido')
<div class="row">
    <div class="col">
        <center><h3>Lista 2: Predios con Usuarios y Subusuarios</h3></center>
        <br>
        @foreach($predios as $predio)
        <ul>
            <li class="list-group-item list-group-item-dark"><b>ID:</b>{{$predio->ID_Predio}}</li>
            <li class="list-group-item list-group-item-dark"><b>Localización:</b>{{$predio->Localizacion}}</li>
            <li class="list-group-item list-group-item-dark"><b>RUT Usuario:</b>{{$predio->users->RUT_usuario}}</li>
                @foreach($predio->subusers as $subuser)
                    <ul>
                        <li class="list-group-item list-group-item-light"><b>RUT Sub usuario:</b>{{$subuser->RUT_subusuario}}</li>
                    </ul>
               @endforeach
            </li>
        </ul>
        @endforeach
    </div>
</div>
@endsection
