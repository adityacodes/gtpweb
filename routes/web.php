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

	Route::get('/', [ 
			'as' => 'main.index', 
			'uses'=>'MainController@getIndex'
		]);

	Route::get('what-is-mmm', [ 
			'as' => 'main.index', 
			'uses'=>'MainController@getWhatIs'
		]);


	Route::get('ideology', [ 
			'as' => 'main.ideology', 
			'uses'=>'MainController@getIdeology'
		]);
	Route::get('faq', [ 
			'as' => 'main.faq', 
			'uses'=>'MainController@getFaq'
		]);
//Abroad should be countrywise
	Route::get('abroad', [ 
			'as' => 'main.abroad', 
			'uses'=>'MainController@getAbroad'
		]);
// Charity must have country, title, video-link, description, Images
	Route::get('charity', [ 
			'as' => 'main.charity', 
			'uses'=>'MainController@getCharity'
		]);		 

	Route::get('marketing-materials', [ 
			'as' => 'main.marketing', 
			'uses'=>'MainController@getMarketing'
		]);	

// name => how_to_create_bitcoin, how_to_buy_bitcoin, how-to-provide-help, how-to-run-mmmextra, how-to-get-help, how-to-sell-bitcoin
	Route::get('tutorials', [ 
			'as' => 'main.tutoriallist', 
			'uses'=>'MainController@getTutorialList'
		]);	

	Route::get('tutorials/{name}', [ 
			'as' => 'main.tutorials', 
			'uses'=>'MainController@getTutorials'
		]);	

// contacts  => message, name, status[member, nonmember], phone, email, skype, captcha	
	Route::get('contacts', [ 
			'as' => 'main.contact', 
			'uses'=>'MainController@getContact'
		]);	
		
	Route::get('legality', [ 
			'as' => 'main.legality', 
			'uses'=>'MainController@getLegality'
		]);	
		
	Route::get('ads', [ 
			'as' => 'main.ads', 
			'uses'=>'MainController@getAds'
		]);	
		
	Route::get('how-to-start-use', [ 
			'as' => 'main.howto', 
			'uses'=>'MainController@getHowto'
		]);	
		
// Auth::routes();
	
	Route::get('gtpadmin', [ 
			'as' => 'login', 
			'uses'=>'Auth\LoginController@showLoginForm'
		]);	
	Route::post('gtplogin', [  
			'uses'=>'Auth\LoginController@login'
		]);

	Route::post('logout', [ 
			'as' => 'logout', 
			'uses'=>'Auth\LoginController@logout'
		]);

	Route::get('gtpregister', [ 
			'as' => 'register', 
			'uses'=>'Auth\RegisterController@showRegistrationForm'
		]);

	Route::post('gtpregister', [  
			'uses'=>'Auth\RegisterController@register'
		]);

	Route::get('register',[
			'uses' => 'MainController@register'
		])


Route::get('/home', 'HomeController@index');
