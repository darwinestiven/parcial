<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Admin\HomeController;
use App\Http\Controllers\Articulo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', [HomeController::class,'index' ] 
// );

Route::get('/diazmontiel/articulos', [Articulo::class,'index' ] 
)->name('listado_articulos');

Route::get('/diazmontiel/marcas', [Marca::class,'index' ] 
)->name('listado_marcas');


Route::get('/diazmontiel/marcas', [Marca::class,'index' ] 
)->name('listado_marcas');