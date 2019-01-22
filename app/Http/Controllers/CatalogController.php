<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //Definimos las variables
    private $arrayClientes = array(
        array(
            'nombre' =>'Neo',
            'imagen' =>'Imagen personalizada de la felicitación',
            'fecha_nacimiento' => '06/01/1972',
            'correo' => 'neo@matrix.org'
            
        ),
        array(
            'nombre' =>'Morfeo',
            'imagen' =>'Imagen personalizada de la felicitación',
            'fecha_nacimiento' =>'05/03/1997',
            'correo' => 'morfeo@matrix.org'

    ));
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
