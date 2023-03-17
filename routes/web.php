<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\AlumniTestimonialController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MerchandiseController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\GalleryPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MembersPageController;
use App\Http\Controllers\MerchandisePageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'index')->name('login-form');
            Route::post('/login', 'login')->name('login');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('profile');
            Route::patch('/profile', 'update')->name('profile.update');
        });

        Route::resource('users', UserController::class)->middleware(['can:super-admin']);

        Route::resource('blog-categories', BlogCategoryController::class);
        Route::resource('blogs', BlogController::class);
        Route::post('/blogs/store',[BlogController::class,'image_upload'])->name('blogs.images.store');

        Route::resource('event-categories', EventCategoryController::class);
        Route::resource('events', EventController::class);
        Route::resource('speakers', SpeakerController::class);

        Route::resource('alumni-testimonials', AlumniTestimonialController::class);

        Route::resource('members', MemberController::class);

        Route::resource('merchandise', MerchandiseController::class);

        Route::resource('albums', AlbumController::class);

        Route::post('/images/store',[ImageController::class,'store'])->name('images.store');
        Route::delete('/images/destroy/{image}',[ImageController::class,'destroy'])->name('images.destroy');
    });
});

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/member', [MembersPageController::class, 'index'])->name('members');
Route::get('/blogs', [BlogPageController::class, 'index'])->name('blogs');
Route::get('/events', [EventPageController::class, 'index'])->name('events');
Route::get('/gallery', [GalleryPageController::class, 'index'])->name('gallery');
Route::get('/merch', [MerchandisePageController::class, 'index'])->name('merchandise');
