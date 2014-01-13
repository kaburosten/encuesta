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

Route::resource('admin/users', 'Admin_UsersController');

Route::get('admin/dashboard', function()
{
	$menuActive=array('dashboard' => 'class="active"', 'graphics' => '','users' => '');
	return View::make('admin/dashboard')->with('menu', $menuActive);
});

Route::get('admin/graphics', function()
{
	$menuActive=array('dashboard' => '', 'graphics' => 'class="active"','users' => '');
	return View::make('admin/graphics/graphics')->with('menu', $menuActive);
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
	$data= array
	(
		'0'=>array('y'=>'2013-01', 'a'=> 100),
		'1'=>array('y'=>'2013-02', 'a'=> 75),
		'2'=>array('y'=>'2013-03', 'a'=> 50),
		'3'=>array('y'=>'2013-04', 'a'=> 75),
		'4'=>array('y'=>'2013-05', 'a'=> 50),
		'5'=>array('y'=>'2013-06', 'a'=> 75),
		'6'=>array('y'=>'2013-07', 'a'=> 100)
	);
	/*return View::make('admin/graphics/graphics')->with('menu', $menuActive);*/
	/*return json_encode($data);*/
	return json_encode($variableX);
});