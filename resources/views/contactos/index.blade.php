@extends('layouts.app')

@section('content')
<div class="container">
<h1 style="text-align:center;">CONTACTOS</h1>
<hr>
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
 {{
    Session::get('Mensaje')
}}
</div>
@endif
<br/>
<br/>
 <form class="form-inline my-2 my-lg-0 float-right" >
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Buscar por nombre" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>

<a class="btn btn-primary" href="{{url('contactos/create')}}">Agregar</a>
<br><br>
<table class="table table-light table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>PERFIL</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ACCIONES</th>
        <tr>
    </thead>
    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$contacto->Foto}}"  class="rounded float-left img-thumbnail" alt="" width="100">
            </td>
            <td>{{$contacto->Nombre}}</td>
            <td>{{$contacto->Apellido}}</td>
            <td>{{$contacto->Correo}}</td>
            <td>{{$contacto->Fecha}}</td>
            <td>
            <a  class="btn btn-warning" href="{{url('/contactos/'.$contacto->id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/contactos/'.$contacto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit"class="btn btn-danger" onclick="return confirm('¿Borrar?');">Eliminar</button>
            </form>
            </td>
        </tr>
    @endforeach
        </tbody>
</table>
</div>
@endsection
