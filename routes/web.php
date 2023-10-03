<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserSittingController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcomePage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index',[PostsController::class,'index']);


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('homeRoute');

Route::get('/userPage', function () {
    return view('user/userPage');
})->middleware(['auth', 'verified'])->name('userPageRoute');

Route::get('/postProperty', function () {
    return view('user/postProperty');
})->middleware(['auth', 'verified'])->name('postPropertyRoute');

Route::resource('/createNewPost', PostsController::class);

Route::resource('listingPost',PostsController::class);

Route::get('/viewPropertyShow/{id}', [PostsController::class,'show'])->middleware(['auth', 'verified'])->name('viewProperty.show');

Route::get('/showARNot/{id}', [PostsController::class, 'showARNot'])->middleware(['auth', 'verified'])->name('viewProperty.showARNot');

Route::get('/viewPropertyDestroy/{id}', [PostsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('viewProperty.destroy');

Route::get('/viewPropertyEdit/{id}', [PostsController::class, 'edit'])->middleware(['auth', 'verified'])->name('viewProperty.edit');

Route::get('/markAllNotUserAR', [Controller::class, 'markAllNotUserAR'])->middleware(['auth', 'verified'])->name('markAllNotUserARRoute');

Route::get('/adminBoard', function () {
    return view('admin/adminBoard');
})->middleware(['auth', 'verified'])->name('adminBoardRoute');

Route::resource('/userSitting',UserSittingController::class);

Route::get('/deleteUser/{id}', [UserSittingController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteUser.destroy');

Route::get('/blockUser/{id}', [UserSittingController::class, 'block'])->middleware(['auth', 'verified'])->name('blockUser.block');