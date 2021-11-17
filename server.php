<?php

    $conn = mysqli_connect("localhost", "root", "", "login_db_01");

    if (!$conn) {
        die("Connection failed" . mysql_connect_error());
    }

?>