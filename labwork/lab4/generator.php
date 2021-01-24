<?php
    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    $textExplode = explode(' ', $text); //converts string to array
    shuffle($textExplode);
    
    //Use the implode function, to turn it back into a string
    $textImplode = implode(' ', $textExplode);

    //Foreach
    foreach($textExplode as $key => $value) {
        echo "<p>$key Value: $value</p>";
    }

    for($i = 0; $i < $numParagraphs; $i++) {
        // Output a paragraph
        echo "<p>$textImplode</p>";
    }
?>