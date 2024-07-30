<?php
    $dbname= "mysql:host=localhost; dbname=crud";
    $username='root';
    $password = '';
    $conn = new PDO($dbname, $username, $password);
    $sql = $conn->query("SELECT * FROM student");

// fetch data with loop 
// 1.
    // while($row = $sql->fetch(PDO::FETCH_NUM)){
    //     echo "{$row[0]} => {$row[1]} - {$row[2]} - {$row[3]} - {$row[4]}";
    //     echo '<br>';
    // }      
// 2.
    // while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    //     echo "{$row['sid']} => {$row['sname']} - {$row['saddress']}";
    //     echo '<br>';
    // }
// 3.
    // while($row = $sql->fetch(PDO::FETCH_OBJ)){
    //     echo "{$row->sid} => {$row->sname} - {$row->sphone}";
    //     echo '<br>';
    // }

// fetch data without loop 
    $result = $sql->fetchAll(PDO::FETCH_NUM);
    print_r($result);

?>