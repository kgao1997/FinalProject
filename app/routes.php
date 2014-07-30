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

Route::get('/', function()
{
	return View::make('master');
	//will likely change to a homepage, this is just a placeholder for now
});

Route::get('mysql-test', function() {
	 $results = DB::select('SHOW DATABASES;');
	 print_r($results);
});

/*

Route::get('/cardsdatabase', function()
{
	return View::make('database');
});

Route::get('/cardviewer',function(integer)
{
	return View::make('cards')
});

Route::get('/deckviewer', function(integer)
{
	return View::make('decks');
});

Route::get('/deckbuilder', function()
{
	return View::make('deckbuilder');
});*/