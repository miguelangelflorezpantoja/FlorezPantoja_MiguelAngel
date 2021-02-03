@section('content')
@extends('layout.master')
@if(count($libro)==0)
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay clientes registrados aun</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else
    <h1> libro </h1>
    <div class="container" >
        <form action="{{route('buscar')}}" method= "POST" class="form-inline md-form mr-auto mb-8">
                                    @csrf
                                    <input  class="form-control mr-sm-2" type="number" name="busqueda" id="busqueda" placeholder="Buscar por cedula" aria-label="Search" required>
                                    <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
        </form> 
    </div>
 
    
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Cedula </th>
            <th scope="col">Direccion </th>
            <th scope="col">Telefono </th>
            <th scope="col">Opcion </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libro as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombreCliente }} </td>
            <td> {{ $c->cedulaCliente }} </td>
            <td> {{ $c->direccionCliente }} </td>
            <td> {{ $c->telefonoCliente }} </td>
            <td>  <a href="{{route('detalleCliente', $c->id)}}" class="btn btn-primary" > Ver detalles </a> </td>
            
            </tr>
        
    @endforeach
    </tbody>
</table
@endif
@stop