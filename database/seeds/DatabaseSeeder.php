<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class DatabaseSeeder extends Seeder
{
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
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedCatalog(); //accediendo al método desde el interior de la definición de la clase
        $this->command->info('Tabla cliente inicializda con datos!');
    }

    private function seedCatalog(){
        DB::table('clientes')->delete();//Borrar el contenido de la tabla

        foreach($this->arrayClientes as $cliente){
            $c = new Cliente();
            $c->nombre=$cliente['nombre'];
            $c->imagen=$cliente['imagen'];
            $c->fecha_nacimiento = $cliente['fecha_nacimiento'];
            $c->correo=$cliente['correo'];
            $c->save();
        }
    }
}
