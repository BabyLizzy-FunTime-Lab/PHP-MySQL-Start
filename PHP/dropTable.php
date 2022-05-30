<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die("Fatal Error");

    if (isset($_POST['table']) && $_POST['table'] == 'drop') {
        $query = "DROP TABLE cats";

        $result = $conn->query($query);
        if(!$result) {
            die("Database access failed");
        } else {
            echo "Table gone";
        }
    }
?>