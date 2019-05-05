<?php
use Illuminate\Support\Facades\Route;
Route::get('/contacter', 'PagesController@contacter');
Route::get('/create', 'PagesController@create');
Route::get('/depose','PagesController@depose');
//Route::get('/success','PagesController@success');

//Route::get('/success','inscriController@store');
Route::get('/admin','AdminController@login');
Route::post('/','succesController@insert');
Route::post('/','succesController@contact');
Route::post('/','formController@contact');


Route::post('/Inscription','FormController@insert');


// Route::post('/succes','succesController@contact');
// Route::post('/success','FormController2@insert');
Route::get('/message', function () {
    return view('pages.message');
});

Route::resource('Inscription','inscriController');
Route::resource('/','indexControler');
Route::resource('success','succesController');
Route::resource('contacter','contactController');

//Route::resource('/success','HomeController');
 
//Route::get('/calculate/{com}/{pu}/{ip}/{nc}/{}/{}', 'inscriController@CalculateScore');
    Auth::routes();

 
Route::get('/pdf','ViewController@generatePDF');
Route::get('/home', 'HomeController@index')->name('home');
