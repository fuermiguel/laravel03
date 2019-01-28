@extends('layouts.master')

@section('content')

<div class="row">

@foreach( $arrayClientes as $key => $cliente )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/catalog/show/' . $key ) }}">
        <img src="{{asset("img/".$cliente['imagen'])}}" style="height:200px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$cliente['nombre']}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop