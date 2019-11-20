<?php
    $connection = new SQLite3('productos.db');
    if($connection){
        echo "Connected\n";
    }
    $results = $connection->query('SELECT * FROM Meter1');
    while($row=$results->fetchArray(SQLITE3_ASSOC)){
        echo 'id = ' . $row['id'] . '<br>';
        echo 'name = ' . $row['name'] . '<br>';
        echo 'Date of Birth = ' . $row['dob'] . '<br>';

    }
?>