<?php 
    session_start();
?>

<html>
    <body>
        <?php 
        echo "Favorite Color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>