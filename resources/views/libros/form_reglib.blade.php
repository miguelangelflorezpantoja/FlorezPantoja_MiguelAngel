@extends('layout')
@section('master')

 

    <form class="text-center border border-light p-5" action="{{route('registrarProducto')}}" method= "POST"> 
        @csrf

    <p class="h4 mb-4">Formulario de Registro</p>
    <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="nombrepro" name="nombrepro" class="form-control">
                        <label for="formRegisterFormFirstName">Nombre libro</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="number" id="cantidadpro" name="cantidadpro" class="form-control">
                        <label for="formRegisterFormLastName">ISBN</label>
                    </div>
                </div>
    </div>
    <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="preciopro" name="preciopro" class="form-control">
                        <label for="precioRegisterFormFirstName">Precio</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="form-group">
                        <label for="fotopro">Sube la foto:</label> 
                        <input type="file" id="fotopro" name="fotopro"  class="form-control-file">
                    </div>
                </div>
    </div>

    <div class="form-row mb-4">





                </div>
    </div>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Registar</button>

    </form>


@stop