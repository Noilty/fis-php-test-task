<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/**
 * PageController
 */
use App\Http\Controllers\PageController as PageController;
Route::group([
    'as' => 'pages.'
], function () {
    Route::get('/',
        [PageController::class, 'index']
    )->name('home');
});
