<?php
use Illuminate\Http\Request;
use App\Producto;

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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('productos', 'ProductoController@index');
    Route::get('productos/{producto}', 'ProductoController@show');
    Route::post('productos', 'ProductoController@store');
    Route::put('productos/{producto}', 'ProductoController@update');
    Route::delete('productos/{producto}', 'ProductoController@delete');
});
    
