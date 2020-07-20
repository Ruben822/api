@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">
    <div class="col-sm-8 align-self-center text-center">
        <h1 class="mb-5">Agregar institucion</h1>
        <form action="{{ route('envioI') }}" method="POST" >
            @csrf
            <div class="">
                <label for="">Nombre</label>
                <input name="nombre" id="nombre" type="text">
            </div>
            <div class="mt-3">
                <label for="">Telefono</label>
                <input name="tel" id="tel" type="number">
            </div>
            <div class="mt-3">
                <label for="">Correo</label>
                <input name="correo" id="correo" type="text">
            </div>
            <button class="btn btn-success mb-5 mt-3" type="submit">Enviar</button>
          </form>
          <a href="{{ route('inicioI') }}"><button class="btn btn-warning">Inicio</button> </a>
    </div>
</div>     
@endsection