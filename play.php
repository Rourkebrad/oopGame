<?php
require('classes/Game.php');
require('classes/Phrase.php');

session_start(); //starts a new session
var_dump($_SESSION);



if(!isset($_POST['key']))
  {

  $_SESSION['phrase'] = new Phrase('start small'); // objects

  $_SESSION['game'] = new Game($_SESSION['phrase']);     // pass the $phrase object when instantiating the Game object
  } else
  {
    $selection = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING);
    $_SESSION['phrase']->selected[] = $selection;
  }

//var_dump($phrase);
var_dump($_SESSION['game']);
var_dump($_SESSION['phrase']->checkLetter('t'));
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
        <?php
        echo $_SESSION['phrase']->addPhraseToDisplay();
        ?>
        <form action="play.php" method="POST">
        <?php
        echo $_SESSION['game']->displayKeyboard();
        echo $_SESSION['game']->displayScore();
        var_dump($_POST);


        ?>
        </form>


</div>

</body>
</html>
