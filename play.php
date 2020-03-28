<?php
require('classes/Game.php');
require('classes/Phrase.php');

$phrase = new Phrase("dream big"); // objects
$game = new Game($phrase);     // pass the $phrase object when instantiating the Game object



//var_dump($phrase);
//var_dump($game);

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
        echo $phrase->addPhraseToDisplay();
        echo $game->displayKeyboard();
        var_dump($_POST);

        ?>

</div>

</body>
</html>
