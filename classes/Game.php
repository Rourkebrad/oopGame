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

    /*
    Head back to Game.php. Now we want to show our keyboard. Create a `displayKeyboard`
    function that builds the HTML of a form with each letter being a submit button. You can find a
    sample of the button HTML in example_html/keyboard.txt. Start by pasting this sample code into
    your `displayKeyboard` method. Make sure you surround this code with a form that POSTS to the
    play.php page. Return the HTML.
    */

    public function displayKeyboard()
    {

      $keys = "<form action='play.php' method='POST'>";
      $keys .= "<div id=\"qwerty\" class=\"section\">";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\">q</button>";
      $keys .= "<button class=\"key\">w</button>";
      $keys .= "<button class=\"key\">e</button>";
      $keys .= "<button class=\"key\">r</button>";
      $keys .= "<button class=\"key\">t</button>";
      $keys .= "<button class=\"key\">y</button>";
      $keys .= "<button class=\"key\">u</button>";
      $keys .= "<button class=\"key\">i</button>";
      $keys .= "<button class=\"key\">o</button>";
      $keys .= "<button class=\"key\">p</button>";
      $keys .= "</div>";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\">a</button>";
      $keys .= "<button class=\"key\">s</button>";
      $keys .= "<button class=\"key\">d</button>";
      $keys .= "<button class=\"key\">f</button>";
      $keys .= "<button class=\"key\">g</button>";
      $keys .= "<button class=\"key\">h</button>";
      $keys .= "<button class=\"key\">j</button>";
      $keys .= "<button class=\"key\">k</button>";
      $keys .= "<button class=\"key\">l</button>";
      $keys .= "</div>";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\">z</button>";
      $keys .= "<button class=\"key\">x</button>";
      $keys .= "<button class=\"key\">c</button>";
      $keys .= "<button class=\"key\">v</button>";
      $keys .= "<button class=\"key\">b</button>";
      $keys .= "<button class=\"key\">n</button>";
      $keys .= "<button class=\"key\">m</button>";
      $keys .= "</div>";

      $keys .= "</div>";
      $keys .= "</form";

      return $keys;

    }


}







?>
