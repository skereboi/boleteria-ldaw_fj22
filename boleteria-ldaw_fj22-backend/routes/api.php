<?php

use Illuminate\Http\Request;
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
use App\Http\Controllers\ReservationController;

/*--------------------------------------------------------------------------
| Routes type: RESOURCE
|--------------------------------------------------------------------------*/
Route::resources(['categories' => CategoryController::class]);
Route::resources(['events' => EventController::class]);
Route::resources(['permissions' => PermissionController::class]);
Route::resources(['roles' => RoleController::class]);
Route::resources(['users' => UserController::class]);
Route::resources(['reservations' => ReservationController::class]);


/* GET Many to Many Routes */

/* Roles <-> Premissions */
Route::get('/roles/{id}/permissions',[RoleController::class, "getPermissions"]);
Route::get('/permissions/{id}/roles',[PermissionController::class, "getRoles"]);

/* Categories <-> Users */
Route::get('/users/{id}/categories',[UserController::class, "getPreferences"]);
Route::get('/categories/{id}/users',[CategoryController::class, "getUsers"]);

/* Events <-> Users */
Route::get('/users/{id}/events',[UserController::class, "getEvents"]);
Route::get('/events/{id}/users',[EventController::class, "getUsers"]);

/* Events <-> Categories */
Route::get('/categories/{id}/events',[CategoryController::class, "getEvents"]);
Route::get('/events/{id}/categories',[EventController::class, "getCategories"]);

/** Reservation table Special Tables */
Route::get('/events/{event_id}/users/{user_id}',[ReservationController::class, "show"]);
Route::put('/events/{event_id}/users/{user_id}',[ReservationController::class, "update"]);
Route::delete('/events/{event_id}/users/{user_id}',[ReservationController::class, "destroy"]);

/* TEST ROUTES */
Route::get('/', function () { return "<img src='https://http.dog/417.jpg'>XD</img>";});
Route::get('/testDB',[_TestController::class, "testConnect"]);
//

