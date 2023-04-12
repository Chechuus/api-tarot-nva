<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;

/*
|--------------------------------------------------------------------------
| API PIN
| Tarot y Astrología
| v1.0
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ContactoController::class)->group(function (){
     
     Route::post('/contacto', 'store'); 
     
});
