@extends("index")
@section('contenido')
    <div class="row">
        <div class="col">
              <center><h3>Lista 1: Usuarios con sus Sub Usuarios</h3></center>
              <br>
                        @foreach($users as $user)
                        <ul>
                            <li class="list-group-item list-group-item-dark"><b>Nombre: </b> {{$user->Username}}</li>
                            <li class="list-group-item list-group-item-dark"><b>Rut: </b> {{$user->RUT_usuario}}</li>
                                @foreach($user->subusers as $subuser)
                               <ul>
                                    <li class="list-group-item list-group-item-light"><b>Nombre: </b> {{$subuser->Username}}</li>
                                    <li class="list-group-item list-group-item-light"><b>Rut: </b> {{$subuser->RUT_subusuario}}</li>
                               </ul>
                               @endforeach
                            </li>
                        </ul>
                        @endforeach
        </div>
</div>
@endsection
