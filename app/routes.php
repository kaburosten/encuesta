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

Route::resource('client/inquest', 'Client_InquestController');

Route::get('client/inquest/code/{code}', 'Client_InquestController@create');

Route::resource('admin/users', 'Admin_UsersController');

Route::post('admin/alumnos/email','Admin_AlumnosController@enviarMails');

Route::resource('admin/alumnos', 'Admin_AlumnosController');


Route::get('admin/dashboard', function()
{
	return View::make('admin/dashboard');
});

Route::get('admin/graphics', function()
{
	return View::make('admin/graphics/graphics');
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::any('admin/data/graphics', function()
{
	//echo 'hola';
	$variableX= DB::table('form')->select(DB::raw('count(q1) as total, q1 as opcion'))->groupBy('q1')->get();
	//$variableX->deserted('2013B');
	/*return View::make('admin/graphics/graphics')->with('menu', $menuActive);*/
	/*return json_encode($data);*/
	return json_encode($variableX);
});

HTML::macro('active_link', function($route, $text){
	if(Request::path() == $route){
		$active = "class='active'";
	}else{
		$active = "class=''";
	}
	return '<li '.$active.'><a href="'.url($route).'">'.$text.'</a></li>';
});