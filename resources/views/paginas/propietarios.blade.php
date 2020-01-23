@extends('plantilla.masterpage')
@section('contenido')
{{-- @section('titulo',"propietarios") --}}


{{-- TODO: mostar lista de propietarios--}}

    @php
    //para utilizar php por blade
        //dd($propietarios);
    @endphp
<div class="centrar">

    <table class="table table-striped table-dark">
      <tr>
        <th>Nombre </th>
        <th>Apellido</th>
        <th>edad</th>
      </tr>
      @foreach ($propietarios as $propietario)
          <tr>
            <td>{{$propietario->nombre}}</td>
            <td>{{$propietario->apellidos}}</td>
            <td>{{$propietario->edad}}</td>

          </tr>
      @endforeach


    </table>

</div>

@stop
