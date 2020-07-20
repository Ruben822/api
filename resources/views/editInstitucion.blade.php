@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">
    <div class="col-sm-8 align-self-center text-center">
        <h1 class="mb-5">Editar institucion</h1>
        <form action="{{ route('actualizarI',$sql->idIns) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="">
                <label for="">Consecutivo</label>
                <label for="">{{ $sql->idIns}}</label>
            </div>
            <div class="">
                <label for="">Nombre</label>
                <input name="nombre" value="{{ $sql->NombreIns}}" id="nombre" type="text">
            </div>
            <div class="mt-3">
                <label for="">Telefono</label>
                <input name="tel" value="{{ $sql->Telefono}}" id="tel" type="number">
            </div>
            <div class="mt-3">
                <label for="">Correo</label>
                <input name="correo" value="{{ $sql->Correo }}" id="correo" type="text">
            </div>
            <button class="btn btn-success mb-5 mt-3" type="submit">Enviar</button>
          </form>
          <a href="{{ route('inicioI') }}"><button class="btn btn-warning">Inicio</button> </a>
    </div>
</div>    
@endsection