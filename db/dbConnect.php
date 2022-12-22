<?php
    $hostname     = "localhost"; // Enter Your Host Name
    $username     = "p-329408_em";      // Enter Your Table username
    $password     = "Agito1987#";          // Enter Your Table Password
    $databasename = "p-329408_em"; // Enter Your database Name


    $conn = new mysqli($hostname, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>