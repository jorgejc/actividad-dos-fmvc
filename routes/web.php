<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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
// funcion anonima, renorna vista que se llama welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function () {
        return 'usersView';
    });
    Route::get('products', function () {
        return 'computador';
    });
});

Route::get('/saludo/{nombre}', function ($nombre) {
    return "hola $nombre";
});

Route::get('/hola/{nombre?}', function ($nombre='invitada') {
    return "hola $nombre";
});

Route::get('/vista-saludo/{nombre}', function ($nombre) {
    return view('practica', [ 'nombre' => $nombre ]);
});

Route::resource('categories', CategoryController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
