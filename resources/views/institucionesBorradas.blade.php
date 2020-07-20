@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100"> 
    <div class="col-sm-3.5 align-self-center text-center">
        <h1 class="mb-5">Instituciones borradas</h1>       
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
                <th>Telefono</th>
                <th>Correo</th>
                <th>Borrado</th>
            </tr>
        @foreach ($ins as $item)            
        <tr>
            <td>{{$item->idIns }}</td>
            <td>{{$item->NombreIns }}</td>
            <td>{{$item->Telefono }}</td>
            <td>{{$item->Correo }}</td>
            <td>
                {{$item->BorradoIns }}
            </td>
        </tr>
        @endforeach
    </div>
</div>    
@endsection