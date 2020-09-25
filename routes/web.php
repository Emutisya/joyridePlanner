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
/*
Route::get('/', function () {
   return view('land');
   
});

*/


Route::group(['middleware'=>['auth','Traveller']], function(){

    Route::get('/',function(){
        return view ('land');
    });
});


Route::get('/test', function () {
    return view('land');
    
 });
Route::get('/register', function () {
    return view('auth.register');
    
 });


Route::get('/login', function () {
    return view('auth.login');
    
 });



Route::get('/d', function () {
    return view('welcome');
    
 });


//Route::get('/hello', function () {
 //   return '<h1>Hello World</h1>';
    
 //});
 
 Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/profile', function () {
    return view('search');
});



/*
Route::get('/users/{id}', function ($id) {
    return 'This is user ' .$id;
});

*/

Route::get('/admin', function () {
    return view('admin.dashboad');
    
 });


 




 Route::get('/serviceP', "admin\dashboadcontroller@Sproviders") ;
    
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 


Route::group(['midddleware'=>['auth','admin']], function(){

    Route::get('/dashboad',function(){
        return view ('admin.dashboad');
    });

    Route::get('/role-register', "admin\dashboadcontroller@registered") ;
});



Route::get('/role-edit/{id}','admin\dashboadcontroller@registeredit');

Route::put('role-register-update/{id}','admin\dashboadcontroller@registerupdate');
Route::delete('/role-delete/{id}','admin\dashboadcontroller@registerdelete');



Route::get('/providers','admin\providersController@index');
Route::get('/providers','admin\providersController@providers');
Route::post('/save-providers','admin\providersController@store');


Route::get('/role-editp/{id}','admin\providersController@registeredit');
Route::put('role-pregister-update/{id}','admin\providersController@registerupdate');
Route::delete('/role-deletep/{id}','admin\providersController@registerdelete');


Route::get('/destinations','admin\destinationsController@index');
Route::get('/destinations','admin\destinationsController@destinations');
Route::post('/save-destinations','admin\destinationsController@store');


Route::get('/role-editd/{id}','admin\destinationsController@registeredit');
Route::put('role-dregister-update/{id}','admin\destinationsController@registerupdate');
Route::delete('/role-deleted/{id}','admin\destinationsController@registerdelete');





Route::get('/places','admin\placesController@index');
Route::get('/places','admin\placesController@places');
Route::post('/save-places','admin\placesController@store');


Route::get('/role-editps/{id}','admin\placesController@registeredit');
Route::put('role-psregister-update/{id}','admin\placesController@registerupdate');
Route::delete('/role-deleteps/{id}','admin\placesController@registerdelete');




Route::get('/register1', function () {
    return view('register1');
});



Route::get('/login1', function () {
    return view('login1');
});


Route::get('/plan', function () {
    return view('plan');
});


//traveller profile

Route::get('/profile', "admin\dashboadcontroller@profile") ;
Route::get('/moreD', "admin\dashboadcontroller@MDprofile") ;
Route::get('/experiences', "admin\dashboadcontroller@EXPprofile") ;
Route::post('/save-profile','admin\dashboadcontroller@store');
Route::get('/role-edit/{id}','admin\dashboadcontroller@registereditP');
Route::put('role-register-update/{id}','admin\dashboadcontroller@registerupdateP');