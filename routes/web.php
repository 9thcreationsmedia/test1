<?php
use Illuminate\Http\Request;

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



Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);

//class routes
Route::get('class','ClassController@index');
Route::post('class','ClassController@classadd');
Route::get('class/{id?}','ClassController@classupdateform');
Route::put('class/{id?}','ClassController@classupdate');
Route::delete('class/{id?}','ClassController@destroy');


//section routes
Route::get('section','SectionController@index');
Route::post('section','SectionController@sectionadd');
Route::get('section/{id?}','SectionController@sectionupdateform');
Route::put('section/{id?}','SectionController@sectionupdate');
Route::delete('section/{id?}','SectionController@destroy');

//subject routes
Route::get('subject','SubjectController@index');
Route::post('subject','SubjectController@subjectadd');
Route::get('subject/{id?}','SubjectController@subjectupdateform');
Route::put('subject/{id?}','SubjectController@subjectupdate');
Route::delete('subject/{id?}','SubjectController@destroy');



//chapter routes
Route::get('chapter','ChapterController@index');
Route::post('chapter','ChapterController@chapteradd');
Route::get('chapter/{id?}','ChapterController@chapterupdateform');
Route::put('chapter/{id?}','ChapterController@chapterupdate');
Route::delete('chapter/{id?}','ChapterController@destroy');



//parent routes
Route::get('parent','ParentController@index');
Route::post('parent','ParentController@parentadd');
Route::get('chapter/{id?}','ChapterController@chapterupdateform');
Route::put('chapter/{id?}','ChapterController@chapterupdate');
Route::delete('chapter/{id?}','ChapterController@destroy');
Route::get('parentsettings','ParentController@parentsettings');



Route::get('parentdetails','ParentController@parentDetails');
//Route::get('parentsettings','ParentController@parentsettings');
Route::get('parentupdateform/{id}','ParentController@parentupdateform');
Route::post('parentupdate','ParentController@parentupdate');
Route::get('parentdelete/{id}','ParentController@parentdelete');



/*
Route::get('building','BuildingController@index');

Route::post('building','BuildingController@buildingadd');

Route::get('building/{id?}','BuildingController@buildingupdateform');


Route::put('building/{id?}','BuildingController@buildingupdate');

Route::delete('building/{id?}','BuildingController@buildingdelete');*/








/*Route::get('productajaxCRUD', function () {
    $products = App\Product::all();
    return view('ajax.index')->with('products',$products);
});
Route::get('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Product::find($product_id);
    return response()->json($product);
});
Route::post('productajaxCRUD',function(Request $request){   
    $product = App\Product::create($request->input());
    return response()->json($product);
});
Route::put('productajaxCRUD/{product_id?}',function(Request $request,$product_id){
    $product = App\Product::find($product_id);
    $product->name = $request->name;
    $product->details = $request->details;
    $product->save();
    return response()->json($product);
});
Route::delete('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Product::destroy($product_id);
    return response()->json($product);
});

*/





//student routes
Route::get('student/{id}','StudentController@index');
Route::post('studentaddform','StudentController@studentAdd');
Route::get('studentdetails','StudentController@studentDetails');
Route::get('studentsettings','StudentController@studentSettings');
Route::get('editstudentform/{id}','StudentController@editStudentForm');
Route::post('studentupdate','StudentController@studentupdate');
Route::get('studentdelete/{id}','StudentController@studentdelete');



//parent routes
/*Route::get('parentdetails','ParentController@parentDetails');
Route::get('parentsettings','ParentController@parentsettings');
Route::get('parentupdateform/{id}','ParentController@parentupdateform');
Route::post('parentupdate','ParentController@parentupdate');
Route::get('parentdelete/{id}','ParentController@parentdelete');*/


//employee module routes
Route::get('addemployee','EmployeeController@index');
Route::post('employeeaddform','EmployeeController@employeeadd');
Route::get('viewemployee','EmployeeController@viewemployee');
Route::get('employeesettings','EmployeeController@employeesettings');
Route::get('employeeupdateform/{id}','EmployeeController@employeeupdateform');
Route::post('employeeupdate','EmployeeController@employeeupdate');
Route::get('employeedelete/{id}','EmployeeController@employeedelete');

//class routes

/*Route::post('classaddform','ClassController@classadd');
Route::get('viewclass','ClassController@viewclass');
Route::get('classsettings','ClassController@classsettings');
Route::get('classupdateform/{id}','ClassController@classupdateform');
Route::post('classupdate','ClassController@classupdate');
Route::get('classdelete/{id}','ClassController@classdelete');*/

//section routes
/*Route::get('addsection','SectionController@index');
Route::post('sectionaddform','SectionController@sectionadd');
Route::get('viewsection','SectionController@viewsection');
Route::get('sectionsettings','SectionController@sectionsettings');
Route::get('sectionupdateform/{id}','SectionController@sectionupdateform');
Route::post('sectionupdate','SectionController@sectionupdate');
Route::get('sectiondelete/{id}','SectionController@destroy');
*/
//subject routes
/*Route::get('addsubject','SubjectController@index');
Route::post('subjectaddform','SubjectController@subjectadd');
Route::get('viewsubject','SubjectController@viewsubject');
Route::get('subjectsettings','SubjectController@subjectsettings');
Route::get('subjectupdateform/{id}','SubjectController@subjectupdateform');
Route::post('subjectupdate','SubjectController@subjectupdate');
Route::get('subjectdelete/{id}','SubjectController@destroy');*/


//chapter routes
/*Route::get('addchapter','ChapterController@index');
Route::post('chapteraddform','ChapterController@chapteradd');
Route::get('viewchapter','ChapterController@viewchapter');
Route::get('chaptersettings','ChapterController@chaptersettings');
Route::get('chapterupdateform/{id}','ChapterController@chapterupdateform');
Route::post('chapterupdate','ChapterController@chapterupdate');
Route::get('chapterdelete/{id}','ChapterController@destroy');*/



//acadamic fee routes
Route::get('addacadamicfee','AcadamicFeeController@index');
Route::post('acadamicfeeadd','AcadamicFeeController@acadamicfeeadd');