<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Cliente;


class CatalogController extends Controller
{
    //Protegemos el acceso  a toda la zona de catalogo(Lo hacemos en las rutas)
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
  
    //Creamos las funciones llamadas desde las rutas
    function getIndex(){
        
       return view('catalog.index')->with('arrayClientes',Cliente::all());
       
   
    }

    function getShow($id){
        //Esto queda corregido al cambiar el indice del array por el indice del propio objeto cliente
        return view('catalog.show')->with('cliente',Cliente::findOrFail($id));
        //El método findOrFail  es usado cuando queremos una exception si el modelo no es encontrado
    }
    
    function getCreate(){
        
        return view('catalog.create');
    }

    //Al definir la clase del parámetro $request, estamos indicando al 
    //inyector de dependencias que es lo que debe inyectar.
    //Inyectamos cliente también
    function postCreate(Request $request, Cliente $c ){
      

        $c->nombre = $request->input('nombre');


        //SUBIR IMAGENES DESDE FORMULARIO

        //https://www.youtube.com/watch?v=B-kiywgJ4kY   (public)
        //https://www.youtube.com/watch?v=PjEutNUZjj0   (storage)
        

        if($request->file('imagen')){
           
            $c->imagen = $request->file('imagen')->storeAs('img',$c->nombre . '.jpg') ;//Recuperamos el fichero y lo almacenamos
        }

        //La fecha la guardamos en formato y/m/d para que lo maneje bien el input type=date
      
        $c->fecha_nacimiento = $request->input('fechaNacimiento');

        $c->correo =  $request->input('correo');//$request->correo (también es posible)
       
       
        //Salvamos cliente a la base de datos
        $c->save();

        //Después de salvarlo lo vemos en /catalog
        return redirect('/catalog');
    }
    
    function getEdit($id){
        //!!!!!!!!!!!Tener cuidado con el id , porque las funciones del orm empiezan por uno
        //Esto queda corregido al cambiar el indice del array por el indice del propio objeto cliente
        return view('catalog.edit')->with('cliente',Cliente::findOrFail($id));
        //El método findOrFail  es usado cuando queremos una exception si el modelo no es encontrado
    }

    function putEdit(Request $request, Cliente $c  ){
      // dd($request->id);
    
       //Con el identificador lo busco 
       $c = Cliente::findOrFail($request->id);

       //si no hay imagen no hago nada
       //Borrar la imagen anterior
       //si hay imagen la pongo el campo imagen y la guardo
       
       //Actualizo sus campos
        $c->nombre=$request->nombre;

        if($request->file('imagen')){

            Storage::delete('img',$c->imagen);
            $c->imagen = $request->file('imagen')->storeAs('img',$c->nombre . '.jpg') ;//Recuperamos el fichero y lo almacenamos
           
        }
        $c->fecha_nacimiento=$request->fechaNacimiento;
        $c->correo=$request->correo;
       //Guardo
       $c->save();
        //Después de salvarlo lo vemos en /catalog
        return redirect('/catalog');
    }
}
