<?php

  class CardController extends BaseController
 {
 
 //Displays the entire Card Database
  public function viewCards()
  {
    $cards = Card::all();
	foreach($cards as $card)
	{
	  echo "-------------------------------<br>";
	  echo $card->cardName."<br>";
	  echo $card->manaCost."<br>";
	  echo $card->cardText."<br>";
	}
  }
  
  public function getSearch()
  {
    return View::make('searchCard');
  }
  
  public function postSearch()
  {
  $query = Input::get('query');
  $cards = DB::select('select * from cards where cardName like"'.$query.'"');
  $results = ' ';
  foreach($cards as $card)
    {
	  $results .= View::make('cardDisplay')->with('card', $card)-> render();
    }
	return $results;
  }

  public function getDeleteCard()
  {
    return View::make('deleteCard');
  }

  public function postDeleteCard()
  {
    $query = Input::get('query');
    $cards = DB::select('select * from cards where cardName like"'.$query.'"');
    foreach($cards as $card)
      {
         DB::delete('card');
      }
   }
	
	
}
  
  