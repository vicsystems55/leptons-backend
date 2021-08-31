<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\AdminPageController;

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


Route::get('/', [FrontPageController::class, 'index'])->name('home');

Route::get('/about', [FrontPageController::class, 'about'])->name('about');

Route::get('/contact', [FrontPageController::class, 'contact'])->name('contact');

Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');

Route::get('/post/{post_code}', [FrontPageController::class, 'post'])->name('post');

Route::get('/shop', [FrontPageController::class, 'shop'])->name('shop');

Route::get('/details/{listing_code}', [FrontPageController::class, 'details'])->name('details');

Route::get('/search_results', [FrontPageController::class, 'search_results'])->name('search_results');




Route::group(['middleware' => ['auth'],  'prefix' => 'admin'], function(){

    Route::get('/', [AdminPageController::class, 'index'])->name('admin');

    Route::get('/listings', [AdminPageController::class, 'listings'])->name('admin.listings');

    Route::get('/listing/{listing_code}', [AdminPageController::class, 'listing'])->name('admin.listing');

    Route::get('/agents', [AdminPageController::class, 'agents'])->name('admin.agents');

    Route::get('/agent', [AdminPageController::class, 'agent'])->name('admin.agent');

    Route::get('/notifications', [AdminPageController::class, 'notifications'])->name('admin.notifications');

    // Route::get('/pending_listings', [AdminPageController::class, 'pending_listings'])->name('admin.pending_listings');

    // Route::get('/reserved_listings', [AdminPageController::class, 'reserved_listings'])->name('admin.reserved_listings');

    // Route::get('/resolved_listings', [AdminPageController::class, 'resolved_listings'])->name('admin.resolved_listings');

    // Route::get('/active_listings', [AdminPageController::class, 'active_listings'])->name('admin.active_listings');



});

Route::group(['middleware' => ['auth'],  'prefix' => 'agent'], function(){

    Route::get('/', [AgentPageController::class, 'index'])->name('agent');

    Route::get('/listings', [AgentPageController::class, 'listings'])->name('agent.listings');

    Route::get('/create_listing', [AgentPageController::class, 'create_listing'])->name('agent.create_listing');

    Route::get('/publish_success', [AgentPageController::class, 'publish_success'])->name('agent.publish_success');

    Route::get('/listing/{listing_code}', [AgentPageController::class, 'listing'])->name('agent.listing');

    Route::get('/messages', [AgentPageController::class, 'messages'])->name('agent.messages');

    Route::get('/notifications', [AgentPageController::class, 'notifications'])->name('agent.notifications');

    Route::get('/profile', [AgentPageController::class, 'profile'])->name('agent.profile');

    // Route::get('/pending_listings', [AgentPageController::class, 'pending_listings'])->name('agent.pending_listings');

    // Route::get('/reserved_listings', [AgentPageController::class, 'reserved_listings'])->name('agent.reserved_listings');

    // Route::get('/resolved_listings', [AgentPageController::class, 'resolved_listings'])->name('agent.resolved_listings');

    // Route::get('/reviews', [AgentPageController::class, 'reviews'])->name('agent.reviews');

    // Route::get('/active_listings', [AgentPageController::class, 'active_listings'])->name('agent.active_listings');

});


Route::resource('/listing_resource', ListingController::class);



Route::get('/choose', [ChooseRoleController::class, 'choose'])->name('choose');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider']);

Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
