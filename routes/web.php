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

//Route::get('addstudent','StudentController@index');


Route::get('addclass','ClassController@index');
Route::post('classaddform','ClassController@classadd');
Route::get('viewclass','ClassController@viewclass');
Route::get('classsettings','ClassController@classsettings');
Route::get('classupdateform/{id}','ClassController@classupdateform');
Route::post('classupdate','ClassController@classupdate');
Route::get('classdelete/{id}','ClassController@classdelete');


Route::get('addsection','SectionController@index');
Route::post('sectionaddform','SectionController@sectionadd');
Route::get('viewsection','SectionController@viewsection');
Route::get('sectionsettings','SectionController@sectionsettings');
Route::get('sectionupdateform/{id}','SectionController@sectionupdateform');
Route::post('sectionupdate','SectionController@sectionupdate');
Route::get('sectiondelete/{id}','SectionController@destroy');