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

Route::get('main', function()
{
	return View::make('main');
});

Route::get('/cardCatalog', 'CardController@viewCards');

Route::get('searchCard', 'CardController@getSearch');

Route::post('searchCard', 'CardController@postSearch');

Route::get('deckBuilder', function()
{
	return View::make('deckBuilder');
});

Route::get('add_card', function()
{
	return View::make('card_add');
});

Route::post('add_card', function()
{
	$card = new Card();
	$card->fill(Input::all());
	$card->save();
	return ('a new card has been added');
});

Route::get('testCard', function()
{
// Create a new Card
	$JTMS = new Card();
// Set Card Info
	$JTMS->cardName = 'Jace, the Mind Sculptor';
	$JTMS->manaCost = '2UU';
	$JTMS->cardText = 'You win the game';
// Save Card
	$JTMS -> save();
	
	return 'A new card has been added!';
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