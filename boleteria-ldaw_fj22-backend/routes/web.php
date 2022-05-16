<?php


use Illuminate\Support\Facades\Route;

/*--------------------------------------------------------------------------
| Import Controlllers
|--------------------------------------------------------------------------*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\_TestController;
use App\Http\Controllers\EventController;


/*--------------------------------------------------------------------------
| Routes type: RESOURCE
|--------------------------------------------------------------------------*/

Route::resources(['categories' => CategoryController::class]);
Route::resources(['events' => EventController::class]);
Route::resource('users',UserController::class);


/* TEST ROUTES */
Route::get('/', function () { return "<h1>XD</h1>";});
Route::get('/testDB',[_TestController::class, "testConnect"]);
//




