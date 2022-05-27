<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    if (isset($_POST['table']) && $_POST['table'] == 'create') {
        $query = "CREATE TABLE cats (
            id SMALLINT NOT NULL AUTO_INCREMENT,
            family VARCHAR(32) NOT NULL,
            name VARCHAR(32) NOT NULL,
            age TINYINT NOT NULL,
            PRIMARY KEY (id)
        )";

        $result = $conn->query($query);
        if(!$result) die ("Database access failed");

        // $result->close();
        // $conn->close();
    }

    
?>