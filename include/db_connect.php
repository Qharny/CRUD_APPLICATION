<?php
    $connection = mysqli_connect("localhost", "root", "", "project");

    if(!$connection){
        die("connection Error").mysqli_connect_error();
    }
?>