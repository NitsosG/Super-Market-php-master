<?php declare(strict_types=1);
function DbConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "super_market";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
?> 