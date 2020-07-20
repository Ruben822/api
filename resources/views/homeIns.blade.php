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
        <div class="col-sm-6 align-self-center text-center">
            <a href="{{ route('inicio') }}"> 
                <button type="button" class="btn btn-success ml-5" >
                    Mascotas
                </button>
            </a>
            <a href="{{ route('crearI') }}"> 
                <button type="button" class="btn btn-success ml-5" >
                    Agregar instituciones
                </button>
            </a>
            <table id="eje" class="mt-5 table-hover table-responsive table-striped table-bordered table text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
            @foreach ($ins as $item)            
            <tr>
                <td>{{$item->idIns }}</td>
                <td>{{$item->NombreIns }}</td>
                <td>{{$item->Telefono }}</td>
                <td>{{$item->Correo }}</td>
                <td>
                    <a href="{{ route('editarI',$item->idIns) }}"><button class="btn btn-success mb-1" >Editar Institucion</button></a>   
                    <form action="{{ route('eliminarI',$item->idIns) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </div>
    </div>    
</body>
</html>