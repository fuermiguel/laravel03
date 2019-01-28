<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class CatalogController extends Controller
{
    //Definimos las variables

  
    //Creamos las funciones llamadas desde las rutas
    function getIndex(){
        //var_dump(Cliente::all());
        return view('catalog.index')->with('arrayClientes',Cliente::all());
   
    }

    function getShow($id){

        return view('catalog/show')->with('cliente',$this->arrayClientes[$id]);

    }

    function getCreate(){

        return view('catalog.create');
    }

    function getEdit($id){
        return view('catalog.edit')->with('id',$id);
    }
}
