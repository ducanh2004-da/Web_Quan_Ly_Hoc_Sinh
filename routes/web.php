<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserinfoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\HomeController02;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    // Nội dung trang dashboard
    return view('admin\users\login');
})->middleware('auth');
Route::get('/test-email', function () {
    try {
        Mail::raw('Test email body', function ($message) {
            $message->to('anhdott1@gmail.com')
                    ->subject('Test Email');
        });

        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Failed to send email: ' . $e->getMessage();
    }
});

Auth::routes(['verify' => true]); // Đảm bảo bạn đã bao gồm xác thực

Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [SocialiteController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);

// Hoặc nếu bạn sử dụng xác thực tùy chỉnh
Route::post('home/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('QLHS/',function(){
    return view('QLHS.index');
});

// Route::post('home/updateInfo',[UserinfoController::class, 'getinfo'])->name('updateInfo');
// Route::get('home/updateInfo',[UserinfoController::class, 'getinfo']);
// Route to display the home page with user info and images

// Route::get('/home', [UserinfoController::class, 'showinfo'])->name('home'); // Show user info
// Route::get('/home', [ImageController::class, 'show'])->name('home');
Route::get('/home', [HomeController02::class, 'index'])->name('home'); // Unified route for home page

Route::post('/home/updateInfo', [UserinfoController::class, 'getinfo'])->name('updateInfo'); // Update user info
Route::post('/home/todoList', [TodoController::class, 'getTodo'])->name('todoList'); // Store todo
Route::post('images/store', [ImageController::class, 'store'])->name('images.store'); // Store uploaded image

// Route::get('/home/todos', [TodoController::class, 'index'])->name('todos.index'); // Show todos