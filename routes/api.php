<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// we can prefix the route so if we wanted multiple api versions we can add v1,v2,v3 to the route
/*Route::prefix('v1')->group(function(){
    Route::resource('products', ProductController::class);
}); */

Route::resource('products', ProductController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
