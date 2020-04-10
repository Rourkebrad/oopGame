<?php
require('classes/Game.php');
require('classes/Phrase.php');

session_start(); //starts a new session
//var_dump($_SESSION);

if (isset($_POST['start'])) {
    unset($_SESSION['selected']);
    unset($_SESSION['phrase']);
  }


if(!isset($_POST['key']))
  {
    $_SESSION['phrase'] = new Phrase(); // objects
    $_SESSION['game'] = new Game($_SESSION['phrase']);     // pass the $phrase object when instantiating the Game object
  }
  {
    $selection = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING);
    $_SESSION['phrase']->selected[] = $selection;
  }

//var_dump($phrase);
//var_dump($_SESSION['game']);
//var_dump($_SESSION['phrase']->checkLetter('t'));
//echo "<br>";
//var_dump($_SESSION['game']->checkForLose());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Phrase Hunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
<div class="main-container">

        <h2 class="header">Phrase Hunter</h2>
        <div id="colourChange">
        <?php
        echo $_SESSION['phrase']->addPhraseToDisplay();
        ?>
      </div>
        <form action="play.php" method="POST">
          <div id="keyboardBack">
        <?php
        echo $_SESSION['game']->displayKeyboard();
        ?>
      </div>
        <?php
        echo $_SESSION['game']->displayScore();
        echo $_SESSION['game']->gameOver();

        ?>

        </form>

        <script>
        document.addEventListener('keydown', function(event) {
          var keys = document.getElementsByClassName('key');
          var key_press = event.key;
          for(let i= 0; i <= keys.length -1; i++) {
              let key = keys[i].value;
              if(key_press == key) {
                keys[i].click();
              }
          }
        });
        </script>

</div>
</body>
</html>
