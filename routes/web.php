<?php
use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('index');
});
Route::post('/create', [CarController::class, 'create'])->name('create');
Route::post('/store', [CarController::class, 'store'])->name('store');
/*
Route::get('/', [StudentController::class,'index'])->name('home');
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::get('/show', [StudentController::class,'show'])->name('show');
Route::get('/create', [StudentController::class,'create'])->name('create');
Route::post('/store', [StudentController::class,'store'])->name('store');
Route::post('/update/{id}', [StudentController::class,'update'])->name('update');
 */