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
	
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

//Home page
Route::get('/', 'PagesController@index');

Route::get('/createaccount', function () {
    return view('account');
});
//about page
Route::get('/about', 'PagesController@about');

//mortgage guide page
Route::get('/mortgageGuide', 'PagesController@mortgageGuide');

//mortgage calculators page
Route::get('/mortgageCalculators', 'PagesController@mortgageCalculators');

//mortgage calculators page
Route::get('/mortgageCalculators/buyerMortgageCalculators', 'PagesController@buyerMortgageCalculators');

//mortgage calculators detail page
Route::get('/mortgageCalculators/mortgageCalculatorsDetail', 'PagesController@mortgageCalculatorsDetail');

//life insurance page
Route::get('/lifeInsurance', 'PagesController@lifeInsurance');

//our Values  page
Route::get('/ourValues', 'PagesController@ourValues');

//conveyancing page
Route::get('/conveyancing', 'PagesController@conveyancing');

//bestGuysBuyer page
Route::get('/bestGuysBuyer', 'PagesController@bestGuysBuyer');

//'/news', 'PagesController@news' page
Route::get('/news', 'PagesController@news');

//newsDetail page
Route::get('/newsDetail', 'PagesController@newsDetail');

//awards page
Route::get('/awards', 'PagesController@awards');

//career page
Route::get('/career', 'PagesController@career');

//contact page
Route::get('/contact', 'PagesController@contact');

//firstTimeBuyer page
Route::get('/mortgageGuide/firstTimeBuyer', 'PagesController@firstTimeBuyer');

//customerReviews page
Route::get('/customerReviews', 'PagesController@customerReviews');

//Single page content
Route::get('/fullPost/{id}/{slug}', 'SinglePageController@index');

//customerReviews page
Route::get('/signup', 'registerController@register')->name('layouts/register');
Route::post('/signup', 'registerController@submitregister');

//login page
Route::get('/loginuser', 'registerController@loginForm')->name('layouts/login');
Route::post('/loginuser', 'registerController@submitlogin');

	
// for show the dashboard
Route::group(['as'=> 'admin','middleware'=>'auth'],function(){
	Route::get('admin', 'AdminController@admin')->name('admin');
});

//Admin Post Section
Route::get('admin/post', 'admin\PostController@index')->name('admin/post');
Route::post('admin/post', 'admin\PostController@store');

//Admin Post Category
Route::get('admin/postCategory', 'admin\CategoryController@index')->name('admin/postCategory');
Route::post('admin/postCategory', 'admin\CategoryController@store');

// add category from new post
Route::post('admin/postNewCategory', 'admin\CategoryController@newcat');

// add category from new post
Route::post('admin/postNewTag', 'admin\postTagController@newtag');

// Delete category
Route::get('admin/deleteCategory/{id}', 'admin\CategoryController@destroy');

//edit category
Route::get('admin/editCategory/{id}', 'admin\CategoryController@edit');

//Admin All Post
Route::get('admin/post/allpost', 'admin\PostController@show')->name('admin/allPost');


Route::get("/admin/post/editpost/{id}", 'admin\PostController@edit')->name('admin/post/editpost/');
Route::post('/admin/post/update', 'admin\PostController@update');
Route::get("/admin/post/deletepost/{id}", 'admin\PostController@destroy')->name('admin/post/deletepost/');

//Contact us
Route::post('contactUs', 'contactController@index')->name('contactUs');

//Testimonials 
Route::get('admin/alltestimonial', 'admin\testimonialController@index')->name('alltestimonial');

//New Testimonials 
Route::get('admin/newtestimonial', 'admin\testimonialController@newtestimonial')->name('newtestimonial');

Route::post('admin/addtestimonial', 'admin\testimonialController@store')->name('addtestimonial');

Route::get('admin/alltestimonial/edittestimonial/{id}', 'admin\testimonialController@edittestimonial')->name('edittestimonial');

Route::get('admin/alltestimonial/deletetestimonial/{id}', 'admin\testimonialController@deletetestimonial')->name('deletetestimonial');


//Custom fields
Route::get('admin/addCustomField', 'admin\customfieldController@index');
Route::post('admin/storeCustomField', 'admin\customfieldController@store');
//firstTimeBuyers
Route::get('admin/firstTimeBuyers', 'admin\customfieldController@firstTimeBuyers');
Route::post('admin/firstTimeBuyers', 'admin\customfieldController@firstTimeBuyersPost');

//Awards
Route::get('admin/awards', 'admin\customfieldController@awards')->name('awards');
Route::post('admin/awardsubmit', 'admin\customfieldController@awardstore')->name('awardsubmit');

Route::get('/sendmail','MailSendController@mailsend')->name('mail');

















