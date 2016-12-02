<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/employee/add', 'PagesController@addEmployee');
Route::get('/employee/manage', 'PagesController@manageEmployee');
Route::get('/employee/view', 'PagesController@viewEmployee');
Route::get('/employee/compensation', 'PagesController@compensationEmployee');
Route::get('/employee/edit', 'PagesController@editEmployee');
Route::get('/attendance/add', 'PagesController@addAttendance');
Route::get('/attendance/leaveRequests', 'PagesController@leaveRequestsAttendance');
Route::get('/attendance/manage', 'PagesController@manageAttendance');
Route::get('/payslip/generate', 'PagesController@generatePayslip');
Route::get('/payslip/manage', 'PagesController@managePayslip');
Route::get('/remittance/generate', 'PagesController@generateRemittance');
Route::get('/remittance/manage', 'PagesController@manageRemittance');
Route::get('/user/add', 'PagesController@addUser');
Route::get('/user/manage', 'PagesController@manageUser');

Route::get('/setting/sss', 'PagesController@sssSetup');
Route::get('/setting/sss/{paramStatus}', 'PagesController@sssSetup');


Route::get('/setting/pagibig', 'PagesController@pagibigSetup');
Route::get('/setting/philhealth', 'PagesController@philhealthSetup');
Route::get('/setting/tax', 'PagesController@taxSetup');
Route::get('/workload/projects', 'PagesController@projectsWorkLoad');
Route::get('/workload/tickets', 'PagesController@ticketsWorkLoad');

Route::get('/workload/details/{id}', 'PagesController@detailsWorkLoad');
Route::get('/workload/projects/{id}', 'PagesController@projectsWorkLoadWithID');

Route::post('sssSetting/ajaxStore', 'SssSettingsController@ajaxStore');
Route::post('sssSetting/{id}/ajaxShow', 'SssSettingsController@ajaxShow');
Route::post('sssSetting/{id}/ajaxUpdate', 'SssSettingsController@ajaxUpdate');
Route::post('sssSetting/{id}/ajaxDestroy', 'SssSettingsController@ajaxDestroy');
Route::post('sssSetting/ajaxMultiDestroy', 'SssSettingsController@ajaxMultiDestroy');