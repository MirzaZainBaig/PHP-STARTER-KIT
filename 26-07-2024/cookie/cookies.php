<?php
    $cookie_name = 'zain';
    $cookie_value = '1020';

    setcookie($cookie_name, $cookie_value, time()+3600, '/');
    // echo 'cookie_value : '.$_COOKIE['user']; If you want to retrieve cookie in different file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!isset($_cookie[$cookie_name])){
            echo ' cookie is not set';
        }
        else{
            echo $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>