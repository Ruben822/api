<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center mt-5 mb-5 h-100">        
        <div class="col-sm-8 align-self-center text-center">
            <a href="{{ route('crear') }}"> 
            <button type="button" class="btn btn-success" >
                    Agregar mascota
                </button>
            </a>
            <table id="eje" class="mt-5 table-hover table-responsive table-striped table-bordered table text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Fecha de nacimiento</th>
                    <th>Foto</th>
                    <th>Institucion</th>
                    <th>Opciones</th>
                </tr>
            @foreach ($sql as $item)
                <tr>
                    <td>{{$item->idMas }}</td>
                    <td>{{$item->NombreMas }}</td>
                    <td>{{$item->NombreAni }}</td>
                    <td>{{$item->NombreRaz }}</td>
                    <td>{{$item->FechaNacimiento }}</td>
                    <td>
                        {{$foto="imagenes/".$item->Foto}}
                        <img src="{{$foto}}" alt="">
                    </td>
                    <td>{{$item->NombreIns }}</td>
                    <td>
                        <a href="{{ route('editar',$item->idMas) }}"><button class="btn btn-success" >Editar Mascota</button></a>
                    </td>
                </tr>
            @endforeach
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>