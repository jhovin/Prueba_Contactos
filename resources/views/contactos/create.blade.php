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
            <h1 style="text-align:center;">NUEVO CONTACTO</h1>
        </div>
    <br>
    <form action="{{url('/contactos')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group col-md-12">
        <label for="Nombre">{{'Nombre'}}</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" value="" required>
        </div>
        <br>
         <div class="form-group col-md-12">
        <label for="Apellido">{{'Apellido'}}</label>
        <input type="text"  class="form-control" name="Apellido" id="Apellido" value="" required>
        </div>
        <br>
         <div class="form-group col-md-12">
        <label for="Correo">{{'Correo'}}</label>
        <input type="email" class="form-control" name="Correo" id="Correo" value="" required>
        </div>
        <br>
         <div class="form-group col-md-12">
        <label for="Fecha">{{'Fecha'}}</label>
        <input type="date"  class="form-control" name="Fecha" id="Fecha" value="" required>
        </div>
        <br>
         <div class="form-group col-md-12">
        <label for="Foto">{{'Foto'}}</label>
        <input type="file"  class="form-control" name="Foto" id="Foto" value="" required>
        </div>
        <br>
        <div class="card-footer">
        <input type="submit"  class="btn btn-success" value="Agregar">
        <a class="btn btn-secondary"  role="button" href="{{url('contactos')}}">Regresar</a>
        </div>
    </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>