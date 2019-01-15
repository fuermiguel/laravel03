<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response; 

class RuteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->call('get','/');
        $this->assertEquals(200, $response->status());

        $response = $this->call('get','/');
        $this->assertEquals('Pantalla principal', $response->getContent());

        $response = $this->call('get','/auth/login');
        $this->assertEquals('Login usuario', $response->getContent());

        $response = $this->call('get','/auth/logout');
        $this->assertEquals('Logout usuario', $response->getContent());

        $response = $this->call('get','/catalog');
        $this->assertEquals('Listado clientes', $response->getContent());

        $response = $this->call('get','/catalog/show10');
        $this->assertEquals('Detalles del clientes', $response->getContent());

        $response = $this->call('get','/catalog/create');
        $this->assertEquals('Alta clientes', $response->getContent());

        $response = $this->call('get','/catalog/edit10');
        $this->assertEquals('Modifica los datos del cliente', $response->getContent());

        $response = $this->call('get','/catalog/delete10');
        $this->assertEquals('Elimina los datos del cliente', $response->getContent());

        // Comprobamos error 404 cuando no se cumple la condición
        $response = $this->call('get','numeros/a');
        $this->assertEquals(404, $response->status());
        
        //Comprobamos el acceso por post
        $response = $this->call('post','rutapost');
        $this->assertEquals('Acceso por POST ', $response->getContent());
        
    }
}
