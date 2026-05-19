<?php

class DatabaseConnection {

    function OpenCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db     = "ecommerce";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function CloseCon($conn) {
        $conn->close();
    }
}

?>