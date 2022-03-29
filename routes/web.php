<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBackend;
use App\Http\Controllers\ControllergetBackend;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Models\Product;

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
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $product = Product::all();
    $user = auth()->user();
    return view('dashboard',compact('product','user'));

})->name('dashboard');

Route::resource('backend',ControllerBackend::class,);

Route::get('/userdelete/{id}',[ControllergetBackend::class,'deletes']);

Route::get('/useredit/{id}',[ControllergetBackend::class,'edit']);

Route::put('update/user/{id}',[ControllergetBackend::class,'update']);

Route::get('/order',[OrderController::class,'index'])->name('order');

Route::post('/order/create',[OrderController::class,'create']);

Route::get('/cartdelete/{id}',[OrderController::class,'deletes']);

Route::get('/cartpurchase',[OrderController::class,'purchase']);

Route::post('/purchaseHistory',[OrderController::class,'clearpurchase']);






Route::get('/productdel',[ControllerProduct::class,'del'])->name('productdel'); 

Route::get('/productdel/del/{id}',[ControllerProduct::class,'deletes']);

Route::get('/Backendproduct',[ControllerProduct::class,'index']);

Route::post('/Product/create',[ControllerProduct::class,'create']);

Route::get('/productedit/{id}',[ControllerProduct::class,'edit']);

Route::put('update/product/{id}',[ControllerProduct::class,'update']);




Route::get('/home', function () { 
    
    return view('home');
});

Route::get('/home', [HomeController::class,'index'])->name('home');


Route::get('/History', [HistoryController::class,'index'])->name('History');

Route::get('/adminhistory',[HistoryController::class,'admin'])->name('adminhistory');

Route::get('/historydelete/{id}',[HistoryController::class,'historydelete']);


Route::get('/userAdmin', function () { 
    $user = User::all();
    return view('userAdmin',compact('user'));
});



