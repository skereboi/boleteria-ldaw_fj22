<?php


use Illuminate\Support\Facades\Route;


/*--------------------------------------------------------------------------
| Import Controlllers
|--------------------------------------------------------------------------*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryControler;
use App\Http\Controllers\_TestController;
/**/

/*--------------------------------------------------------------------------
| Routes type: RESOURCE
|--------------------------------------------------------------------------*/

Route::resource('users',UserController::class);

/**/

Route::get('/', function () { return "<h1>Puta</h1>";});



/*--------------------------------------------------------------------------
| USERS Router
|--------------------------------------------------------------------------*/
/* Prefix */
Route::prefix('users')->group(function () {

    /* GET */
    Route::get('/',[UserController::class, "index"]);
    /* POST */
   
    /**/
});

/* Test DB Conecction */
Route::get('/testDB',[_TestController::class, "testConnect"]);
//

/**/
Route::resources(['categories' => CategoryControler::class]);


