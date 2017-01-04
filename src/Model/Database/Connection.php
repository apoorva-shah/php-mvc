<?php

class Connection
{
    public function getConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = 'customer_management';

    // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
} 