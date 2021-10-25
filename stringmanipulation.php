<?php 
            $title = "String Manipulation";
            include'includes/header.php'?> 
    <h1><?php echo $title?></h1>
    <?php
    echo "<h3>Concatenation of String</h3>";

    $phrase1 = "Who Student come in late";
    $phrase2 = "in Class, Stand with Rock";

    echo $phrase1 . $phrase2;
    echo "</br>";
    echo $phrase1 . "Named Ammad Ali" . $phrase2;
    echo "</br>$phrase1 .  named Ammad,  . $phrase2";
    echo "<hr/>";
    ?>
    
 

    <h3>String Transformation</h3>
    <?php
        //UpperCase

    $name = "ammad Ali";
    $named = "s m ammad ali";
    echo '</br> UpperCase first letter : ' .ucfirst($name) . '</br>';
    echo 'UpperCase first letter of each word: ' .ucwords($named) . '</br>';
    echo 'Upper Case : ' .strtoupper($named) . '</br>';
    echo "Lower Case: ".strtoLower('THIS IS LOWER CASE')."</br>";
    echo "<hr/>";
    ?>

    <h3>Repeat of String</h3>
    <?php
    echo "Repeat String: " . str_repeat('a',10) . "</br>";
    echo "Repeat String - Nested Function: ". strtoupper(str_repeat('a',10))."</br>";
    echo "Get a Sub-String: ". substr($named,4,5)."</br>";
    echo "Get position of String: ".strpos($named,'a')."</br>";
    echo "Find the length of String: ".strlen($named)."</br>";

    //FInd the Character of the String

    //echo "Find the Character a; ".strchr($named, 'a'."</br>");
    //echo "Find the Character s; ".strchr($named, 's'."</br>");
    ?>
 <?php require 'footer.php' ?>