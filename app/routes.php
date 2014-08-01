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
Route::get('main', function()
{
	return View::make('main');
});

Route::get('cardCatalog', function()
{
	return View::make('cardCatalog');
});

Route::get('deckBuilder', function()
{
	return View::make('deckBuilder');
});
*/

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