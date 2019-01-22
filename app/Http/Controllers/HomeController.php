<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     //Creamos las funciones llamadas desde las rutas
     function getHome(){
        return redirect()->action('CatalogController@getIndex');
    }
}
