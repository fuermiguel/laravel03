@extends('layouts.master')

@section('content')

<div class="row">

@foreach( $arrayClientes as $key => $cliente )
<div class="col-sm-4">
    <a href="{{ url('/catalog/show/' . $cliente->id ) }}">
        <img src="{{$cliente->imagen}}" style="height:200px"/>  
    </a>
    <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$cliente->nombre}}
        </h4>

</div>
@endforeach

</div>

@stop