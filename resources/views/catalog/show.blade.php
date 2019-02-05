@extends('layouts.master')

@section('content')

<div class="row">

<div class="col-sm-4">

    {{-- TODO: Imagen del cliente --}}
    <img src="{{asset($cliente->imagen)}}" style="height:200px"/>

</div>
<div class="col-sm-8">

    {{-- TODO: Datos del cliente --}}
    <h2>{{$cliente->nombre}}</h2>
    <p>{{$cliente->correo}}<p>
    <p>{{date('d-m-Y', strtotime($cliente->fecha_nacimiento))}}</p>
   
    <a href="{{url('/catalog/edit/'.$cliente->id)}}" class="btn btn-warning" role="button">Editar</a>
    <form action="{{action('CatalogController@putDelete', $cliente->id)}}" 
    method="POST" style="display:inline">
    {{ method_field('DELETE') }}
    {!! csrf_field() !!}
    <button type="submit" class="btn btn-danger" style="display:inline">
        Borrar
    </button>
</form>

    <a href="{{url('/catalog')}}" class="btn btn-primary" role="button">Volver</a>
</div>
</div>


@stop