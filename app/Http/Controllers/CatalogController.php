<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class CatalogController extends Controller
{
    //Definimos las variables

  
    //Creamos las funciones llamadas desde las rutas
    function getIndex(){
        
       return view('catalog.index')->with('arrayClientes',Cliente::all());
       
   
    }

    function getShow($id){
        //!!!!!!!!!!!Tener cuidado con el id , porque las funciones del orm empiezan por uno
        //Esto queda corregido al camniar el indice del array por el indice del propio objeto cliente
        return view('catalog.show')->with('cliente',Cliente::findOrFail($id));
        //El método findOrFail  es usado cuando queremos una exception si el modelo no es encontrado
    }
    
    function getCreate(){
        
        return view('catalog.create');
    }
    
    function getEdit($id){
        //!!!!!!!!!!!Tener cuidado con el id , porque las funciones del orm empiezan por uno
        //Esto queda corregido al camniar el indice del array por el indice del propio objeto cliente
        return view('catalog.edit')->with('cliente',Cliente::findOrFail($id));
        //El método findOrFail  es usado cuando queremos una exception si el modelo no es encontrado
    }
}
