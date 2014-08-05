<?php

  class CardController extends BaseController
  {
  public function viewCards()
    {
    $cards = Card::all();
	foreach($cards as $card)
	{
	  echo "---------------------------<br>";
	  echo $card->cardName."<br>";
	  echo $card->manaCost."<br>";
	  echo $card->cardText."<br>";
	}
    }
  }