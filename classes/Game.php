<?php

//class named Game with two properties
class Game
{
    //properties
    // need to decide public, protected, private
    private $phrase;  //a Phrase objectm which will be set by the constructor
    private $lives = 5;   //used to set how many wrong guesses a player has before Game Over. This should be set to 5.

    //constructor
    //class should include a constructor which accepts a Phrase object and sets the property. Should receive one REQUIRED parameters, a Phrase object. Use this object to set the $phrase property
    public function __construct($phraseObj)
    {
      $this->phrase = $phraseObj;

    }

    //this method checks to see if the player has selected all of the letters
    function checkForWin()
    {


    }

    //this method checks to see if the player has guessed too many wrong letters
    function checkForLose()
    {


    }

    //this method displays one message if the player wins and another message if they lose. It returns false if the game has not been won or lost.
    function gameOver()
    {


    }

    //sisplay the number of guesses available. See example example_html/scoreboard.txt file for an example of what the render HTML for a scoreboard should look like. Return string HTML of Scoreboard.
    function displayScore()
    {


    }


}







?>
