<?php
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

/* Route::get('/product', function () {
    return view('product');
}); */

//Route::get('/products/index',[ProductController::class,'mostrar']);



Auth::routes();
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
//Route::get('/home', 'HomeController@index')->name('home');

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 */