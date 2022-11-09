<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('Formulario'); })->name('routeFormulario'); 


Route::view ('/Formulario','Formulario')->name ('routeFormulario'); 
Route::view ('/Consultas','Consultas')->name ('routeConsultas'); 
//Route::view ('/recuerdos','recuerdos')->name ('routeRecuerdos'); 

Route::get('/Consultas', function(){
    return "Esta es mi ruta de Consultas recuerdos";
});

Route::get('/Consultas/{name}', function($name){
     return "Bienvenido a mi ruta Consultas recuerdos $name";
    });


    
Route::get ('/recuerdos/{nombre?}', ['as'=>'NRecuerdos', function($nombre="Invitado"){
    $arrnombres=['Pepe','Pica','Papas'];
    return view ('recuerdos',compact('nombre','arrnombres'));
}]);
*/
/*
Route::get('/',['as'=>'NFormulario','uses'=>'App\Http\Controllers\ControladorPaginas@Formulario']);
Route::get('Consultas',['as'=>'NConsultas','uses'=>'App\Http\Controllers\ControladorPaginas@Consultas']);
Route::get('recuerdos/{nombre?}',['as'=>'NRecuerdos','uses'=>'App\Http\Controllers\ControladorPaginas@recuerdos']);
*/
Route ::get('/',[ControladorPaginas::class,'fFormulario'])->name('NFormulario');
Route ::get('/Consultas',[ControladorPaginas::class,'fConsultas'])->name('NConsultas');

Route::post('/guardarRecuerdos',[ControladorPaginas::class,'procesarRecuerdos'])->name('NProcesar');