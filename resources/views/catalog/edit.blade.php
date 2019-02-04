@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar cliente
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form enctype="multipart/form-data" action="CatalogController@putEdit" method="POST">

             <!--    <input type="hidden" name="_method" value="PUT"> -->
                {{ method_field('PUT') }}
    

            {{-- TODO: Protección contra CSRF --}}
            {{ csrf_field() }}

            <div class="form-group">
               <label for="nombre">Nombre</label>
               <input type="text" name="nombre" id="nombre" value="{{$cliente->nombre}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para la imagen --}}
                <label for="imagen">Sube la imagen:</label>
                <input type="text" name="imagen" id="imagen" value="{{$cliente->imagen}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el fecha de nacimiento --}}
                <label for="fechaNacimiento">Fecha de nacimiento:</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="{{$cliente->fecha_nacimiento}}">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el correo --}}
               <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" id="correo" value="{{$cliente->correo}}">
           
            </div>
           
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar cliente
               </button>
            </div>

            {{-- TODO: Cerrar formulario --}}
            </form>

         </div>
      </div>
   </div>
</div>

@stop