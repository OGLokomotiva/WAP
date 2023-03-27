<?php
    $connect = mysqli_connect("localhost", "root", "", "hotel_plaza");
    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
?>