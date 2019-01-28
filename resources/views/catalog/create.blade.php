@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir cliente
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form action="/foo/bar" method="POST">

            {{-- TODO: Protección contra CSRF --}}
            {{ csrf_field() }}

            <div class="form-group">
            {{-- TODO: Completa el input para la nombren --}}
               <label for="title">Nombre</label>
               <input type="text" name="title" id="title">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para la imagen --}}
               <label for="imagen">Sube la imagen:</label>
                <input type="file" name="imagen" id="imagen">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el fecha de nacimiento --}}
               <label for="fechaNacimiento">Fecha nacimiento</label>
               <input type="date" name="fechaNacimiento" id="fechaNacimiento">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el correo --}}
               <label for="correo">Correo</label>
               <input type="email" name="correo" id="correo">


            </div>
           
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir cliente
               </button>
            </div>

            {{-- TODO: Cerrar formulario --}}
            </form>
         </div>
      </div>
   </div>
</div>

@stop