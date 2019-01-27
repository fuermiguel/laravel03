<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //Definimos las variables
  
    //Creamos las funciones llamadas desde las rutas
    function getIndex(){
        return view('/catalog/index')->with('arrayClientes',$this->arrayClientes);
    }

    function getShow($id){

        return view('catalog/show')->with('cliente',$this->arrayClientes[$id]);

    }

    function getCreate(){

        return view('catalog/create');
    }

    function getEdit($id){
        return view('catalog/edit')->with('id',$id);
    }
}
