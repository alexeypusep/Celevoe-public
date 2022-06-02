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

Route::get('/', 'Controller@index')->name('home');
Route::get('/rabot', 'Controller@rabot')->name('rabot');

Route::get('/organizations', 'OrganizaciiController@allOrganiz')->name('organiz');
Route::post('/orgappcreat', 'OrganizaciiController@orgappcreat')->name('orgappcreat');

Route::get('/jobs', 'JobsController@allJobs')->name('jobs');
Route::get('/jobs/{sphere}', 'JobsController@sphereJobs')->name('jobs-sphere');
Route::get('/jobs/position/{pos}', 'JobsController@posJobs')->name('jobs-pos');
Route::get('/jobs/{id}', 'JobsController@oneJobs')->name('jobs-one');
Route::get('/jobs/formcont/{id}', 'JobsController@jobForm')->name('contact-form');
Route::post('/appcreate', 'JobsController@appcreate')->name('appcreate');
Route::get('/org/{id}', 'JobsController@orgJobs')->name('one-org');
Route::get('/org/jobs/{id}', 'JobsController@orgJobs')->name('jobs-org');

Route::get('/directions', 'DirectController@allDirects')->name('direct');
Route::get('/directions/{sphere}', 'DirectController@sphereDirects')->name('direct-sphere');
Route::get('/directions/jobs/{id}', 'DirectController@oneDirect')->name('direct-one');

Route::get('/test', 'Controller@test')->name('test');

Auth::routes();

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\PanelController::class, 'index'])->name('home_admin');

    Route::resource('organiz', Admin\OrganizacController::class);
    Route::resource('direct', Admin\DirectController::class);
    Route::resource('jobs', Admin\JobsController::class);
    Route::resource('app', Admin\ApplicationController::class);
    Route::resource('appOrg', Admin\ApplicationOrgController::class);
});
