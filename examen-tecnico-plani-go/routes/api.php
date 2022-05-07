<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MaestrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthControllerr::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', 'AuthController@me');

    Route::resource('estudiantes', EstudiantesController::class, ['only' => ['index', 'store', 'update', 'destroy']]);
    Route::resource('maestros', MaestrosController::class, ['only' => ['index', 'store', 'update', 'destroy']]);
    Route::resource('cursos', CursosController::class, ['only' => ['index', 'store', 'update', 'destroy']]);
    route::resource('asignacion', AsignacionController::class, ['only' => ['index', 'store', 'update', 'destroy']]);
});
