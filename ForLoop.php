<?php 
            $title = "For Loop";
            include'includes/header.php'?>

<?php

echo "<h1>".$title."</h1>";

for($a=0; $a<=10; $a++){

    echo '<p>Hello World</p>';
}

for($b=0; $b<=10; $b++){
    echo "<h2>The count is: $b </h2>";
    echo "The count is: $b </br>";
}
?>
 <?php require 'footer.php' ?>