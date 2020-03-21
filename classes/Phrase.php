<?php

//class called Phrase
//need to decide on if public, protected, private
class Phrase
{
    public $currentPhrase;
    public $selected = array();   //creating an empty array

  /*constructor that accepts two parameters optional. $phrase a string, or if empty, get a random phrase.
  $selected an array of selected letters.
  */
  function __construct($phrase = NULL, $selected = NULL)
  {
    $this->phrase = $phrase;
    $this->selected = $selected;

  }

  function addPhraseToDisplay()
  {


  }

  function checkLetter()
  {


  }



}







?>
