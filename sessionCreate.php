<?php 
    session_start();
?>

<html>
    <body>
        <?php 
        $_SESSION["favcolor"] = "black";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        ?>
    </body>
</html>