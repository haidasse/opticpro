<?php

use App\Http\Controllers\ProfileController;
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
route::prefix('driver')->name('driver')->group(function () {


    route::middleware(['isAdmin'])->group(function () {
      
    route::view('/index', 'driver.index');
    });
    require __DIR__.'/driver_auth.php';

});






