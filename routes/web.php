<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'InicioController@index')->name('inicio');

Route::get('contacto',"ContactoController@index")->name('contacto');
//->middleware('auth')
Route::post('contacto/enviar','ContactoController@procesar')->name('procesarContacto');

Route::get('propietarios','PropietarioController@index')->name('propietarios');//toma por defecto el metodo index del controlador


//para crear o insertar un dato mediante parametros
Route::get('propietarios/form','PropietarioController@indexPgForm')->name('formPropietario');
Route::post('propietarios/crear','PropietarioController@crear')->name('crearPropietario')->middleware('amin');

//url,funcion
Route::get('prueba',function(){
    return "<h2>hola mundo</h2>";
});

Route::get('saludar/{username}',function($nombre){
    return "hola tu nombre es:".$nombre;
});
//parametros opcionales
Route::get('saludardos/{username?}',function($nombreOp="invitado"){
    return "hola tu nombre es:".$nombreOp;
});
//multiples parametros
Route::get('nombre/{paramA}/apellido/{paramB}',function($paramA,$paramB){
    return "tu nombre es:".$paramA." y tu apellido es:".$paramB;
});


//trabajar con expresiones regulares
Route::get('nombre/{paramA}/apellido/{paramB}/edad/{age}',function($paramA,$paramB,$age){
    return "tu nombre es:".$paramA." y tu apellido es:".$paramB." y tienes ".$age." años";
})->where([
           'paramA'=>'[a-zA-Z]+',
           'paramB'=>'[a-zA-Z\áéíóúÁÉÍÓÚ]+',
           'age'=>'[0-9]{2}'
         ]);
//pruebra multi-idioma
Route::get('chistes/{idioma?}',function($idioma="es"){
  //establecer el idioma
    App::setLocale($idioma);
    $salida="<h2>".Lang::get('chistes.vandos')."</h2><br/>";
    return "<h2>Chistes en este idioma:".$idioma."</h2>".$salida;

   //TODO::mostrar los chistes con el idioma de configuracion
});

//Route::get('/', 'pruebaControlador@index');

//rutas para las Gafas
Route::resource('gafas','GafasControlador');

Route::get('propietarios/apellido/{username}',"PropietarioController@indexFiltrado");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
