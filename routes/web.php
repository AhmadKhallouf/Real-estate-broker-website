<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSittingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/about_site_formate',function(){return view('about_site_formate');})->name('about_site_formate');


Route::middleware('auth','verified','unblocked','user')->group(function () {

    Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile',[ProfileController::class, 'update_phone_number'])->name('update_phone_number');

    Route::get('/showAllListing/{number}',[UserController::class,'show_all_posts'])->name('all_listing');

    Route::get('/showMyPosts',[UserController::class,'show_my_posts'])->name('show_my_posts');

    Route::get('/getPostProperty',[UserController::class,'get_post_property'])->name('get_post_property_page');

    Route::post('/postProperty',[UserController::class,'store'])->name('post_property');

    Route::get('/getPostDetails/{id}',[UserController::class,'show_specific_post'])->name('show_specific_post');

    Route::get('/getUpdatePostPage/{id}',[UserController::class,'get_update_post_page'])->name('get_update_post_page');

    Route::get('/deleteOnePhoto/{image_id}/{post_id}',[UserController::class,'delete_one_photo_in_update'])->name('delete_one_photo_in_update');

    Route::post('/updatePost/{id}',[UserController::class,'update_post'])->name('update_post');

    Route::get('/getRe_postPage/{id}',[UserController::class,'get_re_post_page'])->name('get_re_post_page');

    Route::post('/re_post/{id}',[UserController::class,'re_post'])->name('re_post');

    Route::get('/deletePost/{id}',[UserController::class,'delete_post'])->name('delete_post');

    Route::get('/readNotification/{id}',[UserController::class,'read_and_delete_individual_notification'])->name('read_and_delete_individual_notification');

    Route::get('deleteAllUnreadNotification',[UserController::class,'delete_all_unread_notifications'])->name('delete_all_unread_notifications');

//---------------------------------------------------------------------------------------------------
    Route::middleware('admin')->group(function(){

           Route::get('/getPostsSettingPage',[AdminController::class,'get_posts_setting_page'])->name('get_posts_setting_page');

           Route::get('/acceptPost/{id}',[AdminController::class,'accept_post'])->name('accept_post');

           Route::get('/refusePost/{id}',[AdminController::class,'refuse_post'])->name('refuse_post');

           Route::get('/getUsersSettingPage',[AdminController::class,'get_users_setting_page'])->name('get_users_setting_page');

           Route::get('/blockUser/{id}',[AdminController::class,'block_user'])->name('block_user');

           Route::get('/unblockUser/{id}',[AdminController::class,'unblock_user'])->name('unblock_user');

           Route::get('/getUserInformation/{id}',[AdminController::class,'get_user_information_page'])->name('get_user_information_page');

           Route::get('/deleteUser/{id}',[AdminController::class,'delete_user'])->name('delete_user');

           Route::get('/getOfficeLinksPage',[AdminController::class,'get_office_links_page'])->name('get_office_links_page');

           Route::post('/updateLinks',[AdminController::class,'update_links'])->name('update_links');

           Route::get('/getNumber&costPage',[AdminController::class,'get_price_and_marchent_page'])->name('get_price_and_marchent_page');

           Route::post('/updateData',[AdminController::class,'update_data'])->name('update_data');

           Route::get('/showPostNotification/{id}',[AdminController::class,'show_post_from_notification'])->name('show_post_from_notification');
    });
    
});

require __DIR__.'/auth.php';

//-------------------------------------------------------------------------------------------------------



//--------------------------------------------------------------------------------------------------------------------------------------






















