@extends('plantilla')

@section('contenido')
<div class="row justify-content-center mt-5 mb-5 h-100">        
    <div class="col-sm-3.5 align-self-center text-center">
        <h1 class="mb-5">Instituciones</h1>
        <a href="{{ route('crearI') }}"> 
            <button type="button" class="btn btn-success ml-5" >
                Agregar instituciones
            </button>
        </a>  
        <a href="{{ route('inicio') }}"> 
            <button type="button" class="btn btn-success ml-5" >
                Mascotas
            </button>
        </a>
        <div class="col-sm-3.5 mt-2 align-self-center text-center">
            <a href="{{ route('borradosI') }}"> 
                <button type="button" class="btn btn-success ml-5" >
                    Instituciones borradas
                </button>
            </a> 
        </div>           
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
@endsection