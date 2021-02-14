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

// user
Route::get('/', 'HomeController@index')->name('home');
Route::post('/store-scores', ['uses' => 'QuestionsController@storeUserScore', 'as' => 'user.store-user-score']);
Route::post('/calculate-scores', ['uses' => 'QuestionsController@calculateUserScore', 'as' => 'user.calculate-score']);
Route::get('/results', ['uses' => 'QuestionsController@userResults', 'as' => 'user.results']);

// page
Route::get('/evaluation/part-a', ['uses' => 'QuestionsController@evaluationPageA', 'as' => 'page.evaluation-page-a']);
Route::post('/evaluation/part-a', ['uses' => 'QuestionsController@storeSelfEvalPartAData', 'as' => 'post.evaluation-part-a']);

Route::get('/evaluation/part-b', ['uses' => 'QuestionsController@evaluationPageB', 'as' => 'page.evaluation-page-b']);
Route::post('/evaluation/part-b', ['uses' => 'QuestionsController@storeSelfEvalPartBData', 'as' => 'post.evaluation-part-b']);


// admin
Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

