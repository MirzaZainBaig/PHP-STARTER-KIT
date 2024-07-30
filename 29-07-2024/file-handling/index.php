<?php
    $file = 'read.php';
    if (file_exists($file)){
        echo readfile($file);
    }else{
        echo 'fie not exists';
    }
    copy($file, 'index.html')


?>