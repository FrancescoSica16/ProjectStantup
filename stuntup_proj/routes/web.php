<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BillController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/bill', function () {
//     return view('bill_create');
// })->name("bill_create");

// Route::get('/bill', function () {
//     return view('bill_store');
// })->name("bill_store");

Route::get('bill-form', [BillController::class, 'index']);
Route::post('store-bill', [BillController::class, 'store']);

Route::get('bill-view', [BillController::class, 'show']);
