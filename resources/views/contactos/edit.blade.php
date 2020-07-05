<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container my-4">
<div class="card">
    <div class="card-header">   
        <h1 style="text-align:center;">MODIFICAR CONTACTO</h1>
    </div>
    <br>
<form action="{{ url('/contactos/' . $contacto->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group col-md-12">
    <label for="Nombre">{{'Nombre'}}</label>

    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{$contacto->Nombre}}">
    </div>
    <br>
    <div class="form-group col-md-12">
    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text"  class="form-control" name="Apellido" id="Apellido" value="{{$contacto->Apellido}}">
    </div>
    <br>
    <div class="form-group col-md-12">
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="{{$contacto->Correo}}">
    </div>
    <br>
    <div class="form-group col-md-12">
    <label for="Fecha">{{'Fecha'}}</label>
    <input type="date"  class="form-control" name="Fecha" id="Fecha" value="{{$contacto->Fecha}}">
    <br>
    </div>
    <label for="Foto">{{'Foto'}}</label>
    <br/>
    <img src="{{ asset('storage').'/'.$contacto->Foto}}" alt="" width="100">
    <br/>
    <input type="file"  class="form-control" name="Foto" id="Foto" value="{{$contacto->Nombre}}">
    <br>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a class="btn btn-secondary" href="{{url('contactos')}}">Regresar</a>
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>