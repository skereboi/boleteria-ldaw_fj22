<?php


use Illuminate\Support\Facades\Route;

/*--------------------------------------------------------------------------
| Import Controlllers
|--------------------------------------------------------------------------*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\_TestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;


/*--------------------------------------------------------------------------
| Routes type: RESOURCE
|--------------------------------------------------------------------------*/

Route::resources(['categories' => CategoryController::class]);
Route::resources(['events' => EventController::class]);
Route::resources(['permissions' => PermissionController::class]);
Route::resources(['roles' => RoleController::class]);
Route::resources(['users' => UserController::class]);


/* TEST ROUTES */
Route::get('/', function () { return "<h1>XD</h1>";});
Route::get('/testDB',[_TestController::class, "testConnect"]);
//




