@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">
    <div class="col-sm-8 align-self-center text-center">
        <h1 class="mb-5">Editar mascota</h1>
        <form action="{{ route('actualizar',$sql->idMas) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <label for="">Consecutivo</label>
                <label for="">{{ $sql->idMas }}</label>
            </div>
            <div class="">
                <label for="">Nombre</label>
                <input name="nombre" value="{{ $sql->NombreMas }}" id="nombre" type="text">
            </div>
            <div class="mt-3">
                <label for="">Especie</label>
                <select name="especie" id="especie">
                    <option value="{{ $sql->Especie }}">{{ $sql->Especie}}</option>
                    @foreach ($especie as $item)
                        <option value="{{$item->idAni}}">{{ $item->idAni." ".$item->NombreAni}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label for="">Raza</label>
                <select name="raza" id="raza">
                    <option value="{{ $sql->Raza }}">{{ $sql->Raza}}</option>
                    @foreach ($raza as $item)
                        <option value="{{$item->idRaz}}">{{ $item->idRaz." ".$item->NombreRaz}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label for="">Fecha de nacimiento</label>
                <input name="fecha" id="fecha" value="{{ $sql->FechaNacimiento }}" type="date">
            </div>
            <div class="mt-3">
                <label for="">Foto</label>
                <input name="foto" id="foto" type="file">
            </div>
            <div class="mt-3">
                <label for="">Institucion</label>
                <select name="institucion" id="institucion">
                    <option value="{{ $sql->Institucion }}">{{ $sql->Institucion}}</option>
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