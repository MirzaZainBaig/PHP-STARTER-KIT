<?php
    session_start();
    // echo $_SESSION['color'];
    echo '<br>'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            echo 'color is : '.$_SESSION['color'];
        ?>
    </h1>
</body>
</html>  