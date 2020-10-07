<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(); 
Route::get('/', 'ArticleController@index')->name('articles.index');
Route::get('/popular', 'ArticleController@popular')->name('articles.popular');

Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);
Route::resource('/users', 'UserController')->only(['show', 'edit', 'update', 'destroy'])->middleware('auth');
// Route::resource('/themes', 'ThemeController')->only(['show'])->middleware('auth');
Route::resource('/answers', 'AnswerController')->only(['store', 'destroy',])->middleware('auth');
Route::get('/themes/{theme}/answers/', 'answerController@index')->name('answers.index');
Route::get('/rank', 'answerController@rank')->name('answers.rank');


Route::prefix('articles')->name('articles.')->group(function () {
  Route::put('/{article}/keep', 'ArticleController@keep')->name('keep')->middleware('auth');
  Route::delete('/{article}/keep', 'ArticleController@unkeep')->name('unkeep')->middleware('auth');
});

Route::prefix('users')->name('users.')->group(function() {
  Route::middleware('auth')->group(function() {
    Route::put('/{user}/follow', 'UserController@follow')->name('follow');
    Route::delete('/{user}/follow', 'UserController@unfollow')->name('unfollow');
    Route::get('/{user}/keeps', 'UserController@keepIndex')->name('keep');
    Route::get('/{user}/articles', 'UserController@myArticle')->name('articles');
    Route::get('/{user}/profileEdit', 'UserController@profileEdit')->name('profileEdit');
    Route::patch('/{user}/profileUpdate', 'UserController@profileUpdate')->name('profileUpdate');
    Route::get('/{user}/PRedit', 'UserController@PRedit')->name('PRedit');
    Route::patch('/{user}/PRupdate', 'UserController@PRupdate')->name('PRupdate');
    Route::patch('/{user}/imageUpdate', 'UserController@imageUpdate')->name('imageUpdate');
  });
});

Route::prefix('answers')->name('answers.')->group(function () {
  Route::put('/{answer}/like', 'AnswerController@like')->name('like')->middleware('auth');
  Route::delete('/{answer}/like', 'AnswerController@unlike')->name('unlike')->middleware('auth');
});

Route::get('/confirm', 'ArticleController@confirm')->name('articles.confirm')->middleware('auth');
Route::post('/confirm', 'ArticleController@send')->name('articles.send')->middleware('auth');
Route::get('/confirEdit', 'ArticleController@confirmEdit')->name('articles.confirmEdit')->middleware('auth');
Route::patch('/confirmEdit', 'ArticleController@sendPatch')->name('articles.sendPatch')->middleware('auth');


Route::get('search/articles', 'ArticleController@search')->name('articles.search');
Route::get('search/users', 'UserController@search')->name('users.search');


Route::prefix('footer')->name('footer.')->group(function() {
  Route::get('/terms', 'FooterController@terms')->name('terms');
  Route::get('/help', 'FooterController@help')->name('help');
  Route::get('/privacy', 'FooterController@privacy')->name('privacy');
});

Route::prefix('contact')->name('contact.')->group(function() {
  Route::get('/index', 'ContactController@index')->name('index');
  Route::post('/confirm', 'ContactController@confirm')->name('confirm');
  Route::post('/send', 'ContactController@send')->name('send');
  Route::get('/complete', 'ContactController@complete')->name('complete');
});


Route::prefix('admin')->name('admin.')->group(function() {
  Route::get('/login', 'Admin\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Admin\LoginController@login')->name('signIn');

  Route::middleware('auth:admin')->group(function() {
    Route::post('logout', 'Admin\LoginController@logout')->name('logout');
    Route::get('/home', 'Admin\HomeController@index')->name('home');

    Route::prefix('/contacts')->name('contacts.')->group(function() {
      Route::get('/index', 'Admin\ContactController@index')->name('index');
      Route::get('/{contact}/show', 'Admin\ContactController@show')->name('show');
      Route::get('/search', 'Admin\ContactController@search')->name('search');
      Route::get('/{contact}confirm', 'Admin\ContactController@confirm')->name('confirm');
      Route::delete('/{contact}/destroy', 'Admin\ContactController@destroy')->name('destroy');
    });

    Route::prefix('/users')->name('users.')->group(function() {
      Route::get('/index', 'Admin\UserController@index')->name('index');
      Route::get('/{user}show', 'Admin\UserController@show')->name('show');
      Route::get('/search', 'Admin\UserController@search')->name('search');
    });

    Route::resource('/themes', 'Admin\ThemeController');
    Route::get('/themes/{theme}/confirm', 'Admin\ThemeController@confirm')->name('themes.confirm');
  });
});



// Route::get('/home', 'HomeController@index')->name('home');

