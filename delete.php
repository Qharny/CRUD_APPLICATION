<?php
    require_once("include/db_connect.php");
    if(isset($_GET['Del'])){
        $UserID = $_GET['Del'];

        $query = "DELETE FROM sign_up WHERE UserID = '$UserID'";

        $result = mysqli_query($connection,$query);
        if($result){
            header("location:view.php");
        }else{
            echo "Check your query";
        }
    }else{
        header("location:view.php");
    }
