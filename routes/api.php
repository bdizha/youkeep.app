<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/welcome', 'HomeController@home')->name('home');
Route::get('/home/categories', 'HomeController@categories')->name('home.categories');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/home', 'HomeController@home')->name('home');

    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
    Route::get('/checkout', 'OrderController@checkout')->name('order.checkout');
    Route::post('/cart', 'OrderController@cart')->name('order.cart');
    Route::get('/profile/{slug}', 'AccountController@show')->name('profile');
    Route::get('/inbox', 'ChatController@index')->name('chat.index');
    Route::get('/inbox/:chat', 'ChatController@show')->name('chat.show');
    Route::get('/account/profile', 'AccountController@show')->name('account.profile');
    Route::get('/account/location', 'AccountController@location')->name('account.location');
    Route::get('/account/payment', 'AccountController@payment')->name('account.payment');
    Route::get('/account/cards', 'AccountPaymentController@cards')->name('account.cards');
    Route::post('/account/card/store', 'AccountPaymentController@store')->name('account.card.store');
    Route::post('/account/card/delete', 'AccountPaymentController@delete')->name('account.card.delete');
    Route::post('/account/settings/store', 'AccountSettingsController@store')->name('account.settings.store');
    Route::post('/account/address/store', 'AccountAddressController@store')->name('account.address.store');
    Route::post('/account/address/delete', 'AccountAddressController@delete')->name('account.address.delete');
    Route::get('/account/notifications', 'AccountController@notifications')->name('account.notifications');
    Route::get('/account/orders', 'OrderController@index')->name('account.orders');
    Route::post('/account/order/store', 'AccountController@store')->name('account.order.store');
    Route::get('/account/order/{slug}', 'OrderController@show')->name('order.show');
    Route::get('/account/credit', 'AccountController@credit')->name('account.credit');
    Route::post('/account/credit/store', 'AccountCreditController@store')->name('account.credit.store');
    Route::post('/account/credit/delete', 'AccountCreditController@store')->name('account.credit.delete');
    Route::get('/account/invite', 'AccountController@invite')->name('account.invite');
    Route::post('/account/invite/store', 'AccountInviteController@store')->name('account.invite.store');
    Route::post('/reviews', 'ReviewController@store')->name('reviews');
    Route::post('/review/store', 'ReviewController@store')->name('review.store');
    Route::post('/actions', 'ActionController@index')->name('actions');
    Route::post('/action/store', 'ActionController@store')->name('action.store');
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');


    Route::get('/about-us', 'PageController@aboutUs')->name('about-us');
    Route::get('/contact-us', 'ContactController@index')->name('contact');
    Route::post('/contact-us', 'ContactController@send')->name('contact.send');
    Route::get('/returns', 'PageController@returns')->name('page.returns');
    Route::get('/kkredit', 'PageController@kkredit')->name('page.kkredit');
    Route::get('/shopple', 'PageController@shopple')->name('page.shopple');
    Route::get('/kkapital', 'PageController@kkapital')->name('page.kkapital');
    Route::get('/kbill', 'PageController@kbill')->name('page.kbill');
    Route::get('/careers', 'CareerController@index')->name('page.careers');
    Route::post('/careers', 'CareerController@openings')->name('page.openings');
    Route::post('/career/resume', 'CareerController@resume')->name('career.resume');
    Route::get('/career/{slug}', 'CareerController@show')->name('career.show');
    Route::get('/career/{slug}/apply', 'CareerController@apply')->name('career.apply');
    Route::post('/career/{slug}/apply', 'CareerController@send')->name('career.apply.send');
    Route::get('/privacy', 'PageController@privacy')->name('page.privacy');
    Route::get('/terms', 'PageController@terms')->name('page.terms');
    Route::get('/hiw', 'PageController@hiw')->name('page.hiw');
    Route::get('/faqs', 'PageController@faqs')->name('page.faqs');
    Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
    Route::get('/locations', 'LocationController@index')->name('modal.index');
    Route::get('/locations/{search}', 'LocationController@lookup')->name('modal.lookup');
    Route::post('/locations/address', 'LocationController@address')->name('modal.address');
    Route::post('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::post('/category', 'CategoryController@flush')->name('category.flush');
    Route::post('/shops', 'StoreController@index')->name('shops');
    Route::post('/products', 'ProductController@index')->name('products.search');
    Route::post('/search', 'SearchController@search')->name('search');
    Route::get('/search', 'SearchController@index')->name('search.index');
    Route::post('/search/suggest', 'SearchController@suggest')->name('search.suggest');
    Route::get('/help', 'HelpController@index')->name('help.index');
    Route::get('/help/{group}/{slug}', 'HelpController@show')->name('help.show');
    Route::get('/resource/{type}/{slug}', 'ArticleResourceController@show')->name('resource.show');
    Route::get('/shopper/apply', 'ShopperController@apply')->name('shopper.apply');
    Route::post('/shopper/store', 'ShopperController@store')->name('shopper.store');
    Route::get('/account/profile', 'AccountController@show')->name('account.profile');
    Route::get('/account/location', 'AccountController@location')->name('account.location');
    Route::get('/account/payment', 'AccountController@payment')->name('account.payment');
    Route::get('/account/cards', 'AccountPaymentController@cards')->name('account.cards');
    Route::get('/account/stores', 'AccountController@user')->name('account.stores');
    Route::get('/account/products', 'AccountController@user')->name('account.products');
    Route::post('/account/card/store', 'AccountPaymentController@store')->name('account.card.store');
    Route::post('/account/card/delete', 'AccountPaymentController@delete')->name('account.card.delete');
    Route::post('/account/settings/store', 'AccountSettingsController@store')->name('account.settings.store');
    Route::post('/account/address/store', 'AccountAddressController@store')->name('account.address.store');
    Route::post('/account/address/delete', 'AccountAddressController@delete')->name('account.address.delete');
    Route::get('/account/notifications', 'AccountController@notifications')->name('account.notifications');
    Route::get('/account/orders', 'OrderController@index')->name('account.orders');
    Route::post('/account/order/store', 'AccountController@store')->name('account.order.store');
    Route::get('/account/order/{slug}', 'OrderController@show')->name('order.show');
    Route::get('/account/credit', 'AccountController@credit')->name('account.credit');
    Route::post('/account/credit/store', 'AccountCreditController@store')->name('account.credit.store');
    Route::post('/account/credit/delete', 'AccountCreditController@store')->name('account.credit.delete');
    Route::get('/account/invite', 'AccountController@invite')->name('account.invite');
    Route::post('/account/invite/store', 'AccountInviteController@store')->name('account.invite.store');
    Route::get('/stores', 'StoreController@index')->name('stores');
    Route::get('/store/{slug}', 'StoreController@show')->name('store.show');
    Route::post('/store/{slug}', 'StoreController@show')->name('store.show');
    Route::post('/stores/{slug}', 'CategoryController@stores')->name('stores.show');
    Route::get('/store/{store}/category/{slug}/{level}', 'CategoryController@store')->name('store.category.show');
    Route::post('/store/{store}/category/{slug}/{level}', 'CategoryController@store')->name('store.category.show.post');
    Route::post('/category/{slug}', 'CategoryController@show')->name('category.show.post');

    Route::get('/category/{slug}/{level}', 'CategoryController@show')->name('category.show.level');
    Route::post('/category/{slug}/{level}', 'CategoryController@show')->name('category.show.level.post');
    Route::get('/product/{slug}', 'ProductController@show')->name('product.get');
    Route::post('/product/{slug}', 'ProductController@show')->name('product.show');
});
