<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| 🏠 INICIO
|--------------------------------------------------------------------------
*/
Route::get('/', function () {

    $products = Product::all();

    return view('welcome', compact('products'));
});

/*
|--------------------------------------------------------------------------
| 🔐 SOLO ADMIN PUEDE PRODUCTOS
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

/*
|--------------------------------------------------------------------------
| 📊 DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| 🛒 CARRITO
|--------------------------------------------------------------------------
*/
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

/*
|--------------------------------------------------------------------------
| 💳 CHECKOUT
|--------------------------------------------------------------------------
*/
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout.index');

/*
|--------------------------------------------------------------------------
| 👤 PERFIL
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';