<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/dashboard',function(){
//    $user = Auth::user();
//    if(Auth::check()){
//        // User is authenticated
//        // You can access user information using Auth::user()
//        // For example, to get the user's name:
//        // $userName = Auth::user()->name;
//        // echo "User is logged in. Name: " . $userName;
//    dd($user->name);
//    }
 return view('user-dashboard');

})->name('user.dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
