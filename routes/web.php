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

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});


Route::get('join', function () {
    return view('join');
});

Route::get('courses', function () {
    return view('courses');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('update', function () {
    return view('update');
});


Route::get('feed', function () {
    return view('feed');
});

Route::get('updateprofile', function () {
    return view('updateprofile');
});

Route::get('changepass', function () {
    return view('changepass');
});

Route::get('admin/index', function () {
    return view('admin/index');
});

Route::get('admin/classhow', function () {
    return view('admin/classhow');
});

Route::get('admin/teacher', function () {
    return view('admin/teacher');
});

Route::get('admin/teachershow', function () {
    return view('admin/teachershow');
});


Route::get('admin/class', function () {
    return view('admin/class');
});


Route::get('admin/teachersignin', function () {
    return view('admin/teachersignin');
});

Route::get('admin/adminsignin', function () {
    return view('admin/adminsignin');
});

Route::get('admin/home', function () {
    return view('admin/home');
});

Route::get('admin/subject', function () {
    return view('admin/subject');
});

Route::get('admin/showsubject', function () {
    return view('admin/showsubject');
});

Route::get('admin/que', function () {
    return view('admin/que');
});

Route::get('admin/showque', function () {
    return view('admin/showque');
});


Route::get('admin/divadd', function () {
    return view('admin/divadd');
});

Route::get('admin/showdiv', function () {
    return view('admin/showdiv');
});

Route::get('admin/suballocate', function () {
    return view('admin/suballocate');
});

Route::get('admin/teacherindex', function () {
    return view('admin/teacherindex');
});






Auth::routes();

Route::get('/home','HomeController@index')->name('home');

//-----------------------student data----------------------//
Route::post('/index','StudentController@store')->name ('submit');//student regester
Route::get('/index','StudentController@clas');
Route::get('findsem/{id}','StudentController@findsem');
Route::get('finddiv/{id}','StudentController@finddiv');
Route::get('/updateprofile','StudentController@index');
Route::post('/updateprofile','StudentController@update')->name('update');


//--------------------------------------------------------------//


//-----------------------teacher data----------------------//
Route::post('admin/teacher','TeacherController@store')->name('add');//add teacher
Route::get('admin/teachershow','TeacherController@index');
//----------------------------------------------------//



//-----------------------class data----------------------//
Route::post('admin/class','ClasController@store')->name('class');//add class

Route::resource('admin/classhow','ClasController');//add subject
//-------------------------------------------------------//


//--------------------que-------------------------------------//
Route::post('admin/que','QuesController@store')->name('que');//add Feedback question
Route::get('admin/showque','QuesController@index');
//-------------------------------------------------------//


//----------------Sem------------------------//
Route::resource('admin/sem','SemController');//add sem
Route::get('admin/showsem','SemController@show');//show sem
//-------------------------------------------//


//----------------DIV------------------------//
Route::resource('admin/divadd','DivController');//add Div
Route::get('findCityWithStateID/{id}','DivController@findCityWithStateID');//show sem
Route::get('admin/showdiv','DivController@show');
//------------------------------------------------//


//-----------------------subject--------------------------//
Route::resource('admin/subject','SubjectController');//add subject
Route::get('findsem/{id}','SubjectController@findsem');//show sem
Route::get('admin/showsubject','SubjectController@show');//show subject
//---------------------------------------------------------//

//--------------------student login//------------//
Route::post('/loginme','loginController@login');//student login
Route::get('/logout','loginController@logout');//student logout
Route::get('/changepassword','loginController@changePassword')->name('changePassword');
//---------------------------------------------//


//------------------feedback----------------------------//
Route::resource('feed','FeedbackController');
Route::post('feed','FeedbackController@store')->name('feedback');
Route::get('feed','FeedbackController@teacher');



//---------------------Facalty Allocation----------------------//
Route::resource('admin/suballocate','FacaltyAllocationController');
Route::get('admin/suballocate','FacaltyAllocationController@teacher');//show teacher and Course
Route::get('finddiv/{id}','FacaltyAllocationController@finddiv');//show div
Route::get('findsubject/{id}','FacaltyAllocationController@findsubject');//show subject
//--------------------------------------------------------------//


//--------------------Teacher login-------------//
Route::get('admin/teacherindex','TeacherloginController@feedback');
Route::post('login','TeacherloginController@login');//teacher login
Route::get('logoutm','TeacherloginController@logoutm');// teacher logout


Route::post('adminlogin','AdminController@adminlogin');//admin login
// Route::post('logout','AdminController@adminlogin@logout');