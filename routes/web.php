<?php

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

Auth::routes([
    'register'=>false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout',function (){
    auth()->logout();
    return redirect('/');
})->name('logout');


Route::group(['middleware'=>'auth','prefix'=>'web_admin'],function(){

    Route::resource('admin','AdminController');

    Route::get('contacts',[
        'uses'=> 'ContactController@index',
        'as'=> 'contacts'
    ]);
    Route::get('contact/read/{id}',[
        'uses'=> 'ContactController@read',
        'as'=> 'contact.read'
    ]);
    Route::get('contact/delete/{id}',[
        'uses'=> 'ContactController@destroy',
        'as'=> 'contact.delete'
    ]);
    Route::post('mail/reply',[
        'uses'=> 'ContactController@reply',
        'as'=>'contact.reply'
    ]);

    Route::resource('subscribe','SubscribeController')->except([
        'store','destroy'
    ]);
    Route::get('subscriber/delete/{id}',[
        'uses'=> 'SubscribeController@destroy',
        'as'=> 'subscribe.destroy'
    ]);
    Route::post('subscriber/mail',[
        'uses'=> 'SubscribeController@mail',
        'as'=>'subscribe.mail'
    ]);

});

Route::post('/contact/store',[
    'uses'=> 'ContactController@store',
    'as'=>'contact.store'
]);

Route::post('subscribe',[
    'uses'=>'SubscribeController@store',
    'as'=> 'subscribe.store'
]);
