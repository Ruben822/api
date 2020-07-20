@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">
    <div class="col-sm-8 align-self-center text-center">
        <h1 class="mb-5">Agregar mascota</h1>
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
@endsection