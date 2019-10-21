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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//account routes
Route::get('accounts', 'AccountController@index');


//candidate routes
Route::resource('candidateprofiles', 'CandidateprofileController');
Route::resource('candidateeducations', 'CandidateeducationController');
Route::resource('candidatepreferences', 'CandidatepreferenceController');
Route::resource('candidateworkexps', 'candidateworkexpController');
Route::resource('candidate_applications', 'CandidateApplicationController');
Route::resource('candidate_languages', 'CandidateLanguageController');
Route::get('candidate_education', 'CandidateeducationController@index');


 