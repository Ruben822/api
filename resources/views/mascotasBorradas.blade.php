@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">    
    <div class="col-sm-6 align-self-center text-center">
        <h1 class="mb-5">Mascotas borradas</h1>    
        <a href="{{ route('inicio') }}"> 
            <button type="button" class="btn btn-success ml-5" >
                Mascotas
            </button>
        </a>
        <a href="{{ route('inicioI') }}"> 
            <button type="button" class="btn btn-success ml-5" >
                Instituciones
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
                <th>Borrado</th>
            </tr>
        @foreach ($sql as $item)            
        <tr>
            <td>{{$item->idMas }}</td>
            <td>{{$item->NombreMas }}</td>
            <td>{{$item->NombreAni }}</td>
            <td>{{$item->NombreRaz }}</td>
            <td>{{$item->FechaNacimiento }}</td>
            <td>        
                <img src="{{ asset('imagenes/'.$item->Foto) }}" style="height: 50px " alt="">
            </td>
            <td>{{$item->NombreIns }}</td>
            <td>
               {{$item->BorradoMas }}
            </td>
            </tr>
        @endforeach
    </div>
</div>
@endsection