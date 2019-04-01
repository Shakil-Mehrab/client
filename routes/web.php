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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'user','middleware'=>['auth']],function(){
	Route::resource('/property','Layouts\PropertyController');
	Route::resource('/category','Layouts\CategoriesController');
//Category
    Route::post('/toggle-categories/{categories_id}','Layouts\CategoriesController@toggleCategories')->name('toggle.categories');	
    Route::get('/category-delete/{category_id}','Layouts\CategoriesController@getDeleteCategory')->name('admin-category.delete');	
    Route::post('/category-update/{category_id}','Layouts\CategoriesController@postUpdateCategory')->name('admin-category.update');
	Route::get('/delete/{product_id}','ProductsController@getDestroy')->name('property.delete');
	Route::post('/update/{product_id}','Layouts\PropertyController@updates')->name('property.updates');
	Route::get('/orders/{type?}','OrderController@Orders');
	Route::post('/toggle-delivered/{order_id}','OrderController@toggleDelivered')->name('toggle.delivered');
	Route::post('/design/upload', 'Layout\BuildYourselfController@DesignUpload')->name('design.upload');
	Route::post('/comment/store', 'Layout\BlogController@CommentStore')->name('comment.store');
});
Route::get('/index2', 'Layout\PageController@Index2')->name('index.2');
Route::get('/about', 'Layout\AboutController@About')->name('about');
Route::get('/services', 'Layout\ServiceController@Services')->name('services');
Route::get('/introduction', 'Layout\BuildYourselfController@Introduction')->name('introduction');
Route::get('/select/design', 'Layout\BuildYourselfController@SelectDesign')->name('select.design');
Route::get('/virtual/construction', 'Layout\BuildYourselfController@VirtualConstruction')->name('virtual.construction');
Route::get('/portfolio/grid', 'Layout\PortFolioController@PortfolioGrid')->name('portfolio.grid');
Route::get('/portfolio/list', 'Layout\PortFolioController@PortfolioList')->name('portfolio.list');
Route::get('/portfolio/detail', 'Layout\PortFolioController@PortfolioDetail')->name('portfolio.detail');
Route::get('/blog/grid', 'Layout\BlogController@BlogGrid')->name('blog.grid');
Route::get('/blog/list', 'Layout\BlogController@BlogList')->name('blog.list');
Route::get('/blog/detail', 'Layout\BlogController@BlogDetail')->name('blog.detail');
Route::get('/contact', 'Layout\ContactController@Contact')->name('contact');
Route::get('/comming/soon', 'Layout\CommingSoonController@CommingSoon')->name('comming.soon');










