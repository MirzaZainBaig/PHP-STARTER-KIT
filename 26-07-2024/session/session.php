<!-- step 1: session _start();
step 2: $_SESSION[name] = value;
step 3: echo $_SESSION[name] = value; -->  
<?php
    session_start();
    $_SESSION['color'] = 'purple';
    echo 'session variable is set';
?>
