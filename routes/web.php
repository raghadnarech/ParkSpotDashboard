<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\AuthController;
use App\Http\Controllers\SuperAdmin\ZoneController;
use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\SlotController;
use App\Http\Controllers\SuperAdmin\CarController;
use App\Http\Controllers\SuperAdmin\Book_historyController;
use App\Http\Controllers\SuperAdmin\UserController;




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
return view("welcome");
});
Route::get('/', function () {
    return view("welcome");
})->name('home');

Route::get('login', function () {
    return view("auth.login");
})->name('login');

Route::post('dashboard',[AuthController::class,'Login']);
Route::resource('zone', 'SuperAdmin\ZoneController');
Route::resource('admin', 'SuperAdmin\AdminController');
Route::resource('book', 'SuperAdmin\BookController');
Route::resource('book_history', 'SuperAdmin\Book_historyController');
Route::resource('slot', 'SuperAdmin\SlotController');
Route::resource('user', 'SuperAdmin\UserController');








Route::get('car', [CarController::class,'index'])->name('car.index');
Route::get('car/create', [CarController::class,'create']);
Route::post('car/store', [CarController::class,'store'])->name('car.store');
Route::get('car/edit/{num_car}/{country}', [CarController::class,'edit'])->name('car.edit');
Route::post('car/delete/{num_car}/{country}', [CarController::class,'destroy'])->name('car.destroy');




