<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class);

Route::get('/checkout',CheckoutComponent::class);

Route::get('/about',AboutComponent::class);

Route::get('/contact',ContactComponent::class);

Route::get('/thankyou',ThankYouComponent::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
  Route::get('/users/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For ADM
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
