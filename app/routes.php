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
	return View::make('main');
});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

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
	$card->fill(Input::except('_token'));
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

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});