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
  $cards = Cards::search($query);
  $results = ' ';
  foreach($cards as $card)
    {
	  $results .= View::make('cardDisplay')->with('card', $card)-> render();
    }
	return $results;
  }
  
  
 }