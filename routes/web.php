<?php

use App\Http\Controllers\Api\TaskApiController;
use Illuminate\Support\Facades\Route;

Route::get('/{path?}', function () {
    return view('app');
});

// Route::group(['prefix' => 'api'], function(){
//     Route::post('/task', [TaskApiController::class, 'saveTask']);
// }); 