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
    return view('mis.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');


//user-details routes
Route::get('/user-details', 'UserDetailController@index')->name('user.index');
Route::get('/user-details/edit', 'UserDetailController@create');
Route::get('/user-education/edit', 'UserDetailController@education');
Route::post('/user-education/update', 'UserDetailController@educationUpdate');
Route::post('/user-details/store', 'UserDetailController@store');
Route::get('/user-details/edit/{id}', 'UserDetailController@edit');
Route::get('/user-professional', 'UserDetailController@professional');
Route::post('/user-professional/update', 'UserDetailController@professionalUpdate');



//leave routes
Route::get('/leave', 'LeaveController@index')->name('leave.index');
Route::get('/leave-add', 'LeaveController@create')->name('leave.create');
Route::post('/leave-store', 'LeaveController@store');
Route::post('/leave-edit/{id}', 'LeaveController@store');
Route::get('/leave-delete/{id}', 'LeaveController@destroy');


//attendance routes
Route::get('/attendance', 'AttendanceController@index')->name('attendance.index');

//photo-album routes
Route::get('/photo-album', 'PhotoAlbumController@index')->name('photo.index');

//conveyance routes
Route::get('/conveyance', 'ConveyanceController@index')->name('conveyance.index');
Route::get('/conveyance/create', 'ConveyanceController@create')->name('conveyance.index');
Route::post('/conveyance/store', 'ConveyanceController@store');
Route::get('/conveyance/policy', 'ConveyanceController@show');



//hall-of-fame routes
Route::get('/hall-of-fame', 'EOFController@index')->name('eof.index');
Route::get('/hall-of-fame/create', 'EOFController@create');
Route::get('/hall-of-fame/create', 'EOFController@create');
Route::post('/hall-of-fame/store', 'EOFController@store');



//reimbursement routes
Route::get('/reimbursement', 'LeaveController@index')->name('reimbursement.index');

//on-duty routes
Route::get('/on-duty', 'OnDutyController@index')->name('od.index');
Route::get('/on-duty/create', 'OnDutyController@create');
Route::get('/on-duty/edit/{id}', 'OnDutyController@edit');
Route::get('/on-duty/delete/{id}', 'OnDutyController@destroy');
Route::post('/on-duty/store', 'OnDutyController@store');
