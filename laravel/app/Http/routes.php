<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function () {
    return view('index');
});


// forms requests
Route::get('index','ContactMessageController@create');
Route::post('index','ContactMessageController@store');
Route::get('plan_result','ContactMessageController@make');
Route::post('plan_result','ContactMessageController@send');

/* START TEMP ROUTES*/

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/our_blog', function () {
    return view('our_blog');
});

Route::get('/port_websites', function () {
    return view('port_websites');
});

Route::get('/port_apps', function () {
    return view('port_apps');
});


Route::get('/port_all', function () {
    return view('port_all');
});

Route::get('/host_services', function () {
    return view('host_services');
});

Route::get('/budget_plan', function () {
    return view('budget_plan');
});

Route::get('/reseller_plan', function () {
    return view('reseller_plan');
});


Route::get('/our_blog',['as'=>'home.our_blog','uses'=>'BlogsController@posts']);
Route::get('/our_blog/{id}',['as'=>'home.our_blog','uses'=>'BlogsController@post']);
Route::get('/single_post/{id}',['as'=>'home.single_post','uses'=>'BlogsController@single']);
Route::get('/host_services',['as'=>'home.host_services','uses'=>'ServicesController@services']);
Route::get('/budget_plan',['as'=>'home.budget_plan','uses'=>'ServicesController@budget']);
Route::get('/reseller_plan',['as'=>'home.reseller_plan','uses'=>'ServicesController@reseller']);


/* END TEMP ROUTES*/


/* START Admin ROUTES*/

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/',['as'=>'home.index','uses'=>'SlideOneController@data']);
Route::get('/about_us',['as'=>'home.about_us','uses'=>'SectionOneController@data']);
Route::get('/port_all',['as'=>'home.port_all','uses'=>'AchivmentsController@all']);




Route::group(['middleware'=>'auth'],function (){



Route::get('/admin', function (){

    return view('admin.index');
});


    Route::get('/admin/all_achivments',function () {
        return view('admin.all_achivments');
    });


    Route::get('/icons',function () {
        return view('admin.icons.index');
    });

    Route::resource('admin/users', 'UserController');
    Route::resource('admin/blogs', 'BlogsController');
    Route::resource('admin/services', 'ServicesController');
    Route::resource('admin/slider/slideOne', 'SlideOneController');
    Route::resource('admin/slider/slideOne/titles', 'SlideOneTitlesController');
    Route::resource('admin/slider/slideTwo', 'SlideTwoController');
    Route::resource('admin/slider/slideThree', 'SlideThreeController');
    Route::resource('admin/products', 'ProductsController');
    Route::resource('admin/stats', 'StatController');
    Route::resource('admin/achivments', 'AchivmentsController');
    Route::resource('admin/logo_achive', 'LogosController');
    Route::resource('admin/seo_achive', 'SeosController');
    Route::resource('admin/social_achive', 'SocialsController');
    Route::resource('admin/mobile_achive', 'MobilesController');
    Route::resource('admin/web_app_achive', 'WebAppsController');
    Route::resource('admin/testi', 'TestisController');
    Route::resource('admin/find_domin', 'OffersController');
    Route::resource('admin/about_us_sections/section1', 'SectionOneController');
    Route::resource('admin/about_us_sections/section2', 'SectionTwoController');
    Route::resource('admin/about_us_sections/section3', 'SectionThreeController');
    Route::resource('admin/about_us_sections/section4', 'SectionFourController');
    Route::resource('admin/about_us_sections/section5', 'SectionFiveController');

});

/* End Admin ROUTES*/


//somur // set cookies

Route::get('cookiesENG'                              , 'langController@cookiesENG');
Route::get('cookiesNED'                              , 'langController@cookiesNED');
Route::get('cookiesARA'                              , 'langController@cookiesARA');


//somur domainAvailableRequest
Route::get('domainAvailableRequest'              , 'DomainSearchController@domainAvailableRequest');

