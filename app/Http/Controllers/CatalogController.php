<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //Creamos las funciones llamadas desde las rutas
    function getIndex(){
        return view('/catalog/index');
    }

    function getShow($id){

        return view('catalog/show')->with('id',$id);

    }

    function getCreate(){

        return view('catalog/create');
    }

    function getEdit($id){
        return view('catalog/edit')->with('id',$id);
    }
}
