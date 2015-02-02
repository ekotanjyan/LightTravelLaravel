<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

/*Home*/
Route::resource('/','HomeController');
Route::get('/About','HomeController@About');
Route::get('/Gallery','HomeController@Gallery');
Route::get('/Tours','HomeController@Tours');
Route::get('/Blog','HomeController@Blog');
Route::get('/Contacts','HomeController@Contacts');

Route::get('/Agency','HomeController@Agency');
Route::get('/News','HomeController@News');
Route::get('/Team','HomeController@Team');
/*Home*/


/*signin*/
Route::resource('signin','AdminController');
Route::post('/logincheck','AdminController@logincheck');
/*signin*/


/*admin*/
Route::get('admin','AdminController@showIndex');
Route::get('content','AdminController@content');
Route::get('slider','AdminController@slider');
Route::post('upload_img','AdminController@upload');
Route::get('delete_img/{id}','AdminController@delete_img');
Route::get('sliderAdd','AdminController@sliderAdd');
Route::get('top','AdminController@top');
Route::get('editslide/{id}','AdminController@editslide');
Route::get('deleteslide/{id}','AdminController@deleteslide');
Route::post('topImg/{id}','AdminController@topImg');
Route::get('addslidertop','AdminController@addslidertop');
Route::post('addtopimg','AdminController@addtopimg');
Route::get('tab','AdminController@tab');
Route::get('tabid/{id}','AdminController@tabid');
Route::get('edit_title/{id}','AdminController@edit_title');
Route::post('edittab/{id}','AdminController@edittab');
Route::get('renameid/{id}','AdminController@renameid');
Route::post('editRename/{id}','AdminController@editrename');
/*admin*/

/*admin about*/
Route::resource('AboutEdit','AboutController');
Route::post('EditAboutText/{id}','AboutController@EditAboutText');
/*admin about*/


/*admin gallery*/
Route::resource('GalleryEdit','GalleryController');
Route::get('AddGallery','GalleryController@AddGallery');
Route::post('AddGallerySave','GalleryController@AddGallerySave');
Route::get('deletegallery/{id}','GalleryController@deletegallery');
Route::get('editgallery/{id}','GalleryController@editgallery');
Route::post('EditGallerySave/{id}','GalleryController@EditGallerySave');
Route::get('Renametitle','GalleryController@Renametitle');
Route::post('TitleSave/{id}','GalleryController@TitleSave');
/*admin gallery*/

/*add user*/
Route::resource('Adduser','AddUserController');
Route::post('Addnewuser','AddUserController@Addnewuser');
/*add user*/

/*add_tours*/
Route::resource('AddTours','AddToursController');
Route::get('add_tours','AddToursController@add_tours');
Route::post('AddNewTours','AddToursController@AddNewTours');
Route::get('edit_tours/{id}','AddToursController@edit_tours');
Route::post('editTours/{id}','AddToursController@editTours');
Route::get('delete_tours/{id}','AddToursController@delete_tours');
Route::post('pricesearch','AddToursController@pricesearch');
/*add_tours*/
