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


//Route::get('/quienessomos', function () {return view ('quienessomos');});
// Route::get('/contactanos', function () {
// return view ('contactanos');
// });
// Route::get('/redes', function () {
// return view ('redes');
// });



$colores = [ //Declarar un arreglo
	['nombre' => 'Verde'],
	['nombre' => 'Azul'],
	['nombre' => 'Negro'],
	['nombre' => 'Rojo'],
];

Route::view('/Home', 'quienessomos')->name('Quienessomos'); 
Route::view('/quienessomos', 'quienessomos')->name('Quienessomos'); //Esta forma se va a utilizar para definir las rutas
Route::view('/contactanos', 'contactanos')->name('contactanos');
Route::view('/redes', 'redes')->name('redes');


Route:: get('/', 'HomeController@index')->name('inicio');
Route::view('/', 'home', compact('colores'))->name('home');
Route:: view()
Route:: resources('colores', 'HomeController')->name('inicio');

/*Route::get('e-control'), function(){
	$lista=['Cocom', 'Nav'];
	return view ('e-control',['lista'->$lista]);
})->name('e-control'); 

Route::view('/for', 'for')->name('for');*/