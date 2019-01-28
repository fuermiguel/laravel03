@extends('layouts.master')

@section('content')

<div class="row">

<div class="col-sm-4">

    {{-- TODO: Imagen del cliente --}}
    <img src="{{asset("img/".$cliente['imagen'])}}" style="height:200px"/>

</div>
<div class="col-sm-8">

    {{-- TODO: Datos del cliente --}}
    <h2>{{$cliente['nombre']}}</h2>
    <p>{{$cliente['correo']}}<p>
    <p>{{$cliente['fecha_nacimiento']}}</p>
   
    <a href="#" class="btn btn-warning" role="button">Editar</a>
    <a href="#" class="btn btn-primary" role="button">Volver</a>
</div>
</div>


@stop