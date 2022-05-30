<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    if (isset($_POST['catfamily']) &&
        isset($_POST['catname']) &&
        isset($_POST['catage'])) {
            
    }

    echo <<<_END
    <form action="PHP/adddataTable.php" method="post">
<pre>
Catfamily   <input type="text" name="catfamily">
Name        <input type="text" name="catname">
Age         <input type="text" name="catage">
            <input type="submit" value="ADD To cats TABLE">
</pre>
    </form>
_END;

    $query = ""


?>