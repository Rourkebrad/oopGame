<?php

//class called Phrase
//need to decide on if public, protected, private
class Phrase
{
    //properties
    private $currentPhrase = "";   //A string containing the current phrase to be used in the game.
    private $selected = [];   //Am array of letters the user has guessed. initialisep the property to an empty array.
    public $phrase = "dream big";

  /*constructor that accepts two parameters optional. $phrase a string, or if empty, get a random phrase.
  $selected an array of selected letters.
  */
  public function __construct($phrase=null, $selected=null)
  {
    if(!empty($phrase))
    {
    $this->currentPhrase = $phrase;
    }

    if(!empty($selected))
    {
    $this->selected = $selected;
    }

  }

  //method
  /*This method adds letter placeholders to teh display when the game starts.
  Each letter is presented by an empty box, one list item for each character.
  See example_phrase_html.txt file for example

  */
  public function addPhraseToDisplay()
  {
    $renderOutput = '<div id="phrase" class="section"><ul>';   //first line of output
    $phraseLetter = str_split(strtolower($this->currentPhrase));    //splits the string into lowercase characters

    foreach($phraseLetter as $letter)
    {
      if($letter = " ")
      {
        $classForLetter = "space";
      }
      }

    }

  }

  //methods
  function checkLetter()
  {


  }



}








?>
