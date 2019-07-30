@extends("index")

@section('contenido')

<div class="col">
        <center><h3>Lista 3: Potreros (NDVI - Fecha)</h3></center>
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID Potrero</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Superficie</th>
                    <th scope="col">ID_Predio</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($potreros as $potrero)

                  <tr>
                    <td>{{$potrero->ID_potrero}}</td>
                    <td>{{$potrero->Tipo}}</td>
                    <td>{{$potrero->superficie}}</td>
                    <td>{{$potrero->ID_Predio}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
  </div>
@endsection
