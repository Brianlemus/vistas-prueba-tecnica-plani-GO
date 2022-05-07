<?php

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MaestrosController;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('estudiantes', EstudiantesController::class, ['only' => ['index', 'store', 'create', 'edit', 'update', 'destroy']]);
    Route::resource('maestros', MaestrosController::class, ['only' => ['index', 'store', 'create', 'edit', 'update', 'destroy']]);
    Route::resource('cursos', CursosController::class, ['only' => ['index', 'store', 'create','edit', 'update', 'destroy']]);
    route::resource('asignaciones', AsignacionController::class, ['only' => ['index', 'store', 'create']]);
});
