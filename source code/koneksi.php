<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // hosting
    // $servername = "localhost";
    // $username = "ifscxyz1_18102171";
    // $password = "pQmsr5H3IamP";
    // $dbname = "ifscxyz1_hotwheels";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>