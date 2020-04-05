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
      $keys = "<div id=\"scoreboard\" class=\"section\">";
      $keys .= "<ol>";
      for ($i =1; $i <= $this->lives; $i++)
      {
      $keys .= "<li class=\"tries\"><img src=\"images/liveHeart.png\" height=\"35px\" widght=\"30px\"></li>";
      }
      $keys .= "</ol>";
      $keys .= "</div>";

      return $keys;

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

      //$keys = "<form action='play.php' method='POST'>";
      $keys = "<div id=\"qwerty\" class=\"section\">";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\"name=\"key\"value=\"q\">q</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"w\">w</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"e\">e</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"r\">r</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"t\">t</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"y\">y</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"u\">u</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"i\">i</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"o\">o</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"p\">p</button>";
      $keys .= "</div>";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\"name=\"key\"value=\"a\">a</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"s\">s</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"d\">d</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"f\">f</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"g\">g</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"h\">h</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"j\">j</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"k\">k</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"l\">l</button>";
      $keys .= "</div>";

      $keys .= "<div class=\"keyrow\">";
      $keys .= "<button class=\"key\"name=\"key\"value=\"z\">z</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"x\">x</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"c\">c</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"v\">v</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"b\">b</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"n\">n</button>";
      $keys .= "<button class=\"key\"name=\"key\"value=\"m\">m</button>";
      $keys .= "</div>";

      $keys .= "</div>";
    //  $keys .= "</form";

      return $keys;

    }

    public function keyIn($letter)
    {
      if(!in_array($letter, $this->phrase->selected))
      {
        return "<button class=\"key\" id=\"" . $letter . "\" type=\"submit\" name=\"key\"value=\"" . $letter . "\">" . $letter . "</button>";
      } else {
        if($this->phrase->checkLetter($letter))
        {
          return "<button class=\"key correct\" id=\"" . $letter . "\" type=\"submit\" name=\"key\"value=\"" . $letter . "\" disabled>" . $letter . "</button>";
        } else {
          return "<button class=\"key incorrect\" id=\"" . $letter . "\" type=\"submit\" name=\"key\"value=\"" . $letter . "\" disabled>" . $letter . "</button>";
        }
      }
    }


}







?>
