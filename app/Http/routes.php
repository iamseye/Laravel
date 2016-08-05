<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {

return view('contact');

});

// Route::get('article','ArticleController@index');
// Route::get('article/create','ArticleController@create');
// Route::get('article/{id}','ArticleController@show');

// Route::post('article','ArticleController@store');

Route::resource('article','ArticleController');

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);

Route::auth();
Route::get('/home', 'HomeController@index');

//teset of making middleware by own
Route::get('foo',['middleware'=>'manager',function(){
    return 'this only manager can see';
}]);
