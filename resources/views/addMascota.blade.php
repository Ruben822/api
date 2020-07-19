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
            <h2 class="mb-5">Agregar mascota</h2>
            <form action="{{ route('envio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="">Nombre</label>
                    <input name="nombre" id="nombre" type="text">
                </div>
                <div class="mt-3">
                    <label for="">Especie</label>
                    <select name="especie" id="especie">
                        @foreach ($especie as $item)
                            <option value="{{$item->idAni}}">{{ $item->idAni." ".$item->NombreAni}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Raza</label>
                    <select name="raza" id="raza">
                        @foreach ($raza as $item)
                            <option value="{{$item->idRaz}}">{{ $item->idRaz." ".$item->NombreRaz}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Fecha de nacimiento</label>
                    <input name="fecha" id="fecha" type="date">
                </div>
                <div class="mt-3">
                    <label for="">Foto</label>
                    <input name="foto" id="foto" type="file">
                </div>
                <div class="mt-3">
                    <label for="">Institucion</label>
                    <select name="institucion" id="institucion">
                        @foreach ($institucion as $item)
                            <option value="{{$item->idIns}}">{{ $item->idIns." ".$item->NombreIns}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success mb-5 mt-3" type="submit">Enviar</button>
              </form>
              <a href="{{ route('inicio') }}"><button class="btn btn-warning">Inicio</button> </a>
        </div>
    </div>    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>


