<?php
include "include/db_connect.php";

if (isset($_POST['submit']))
{
    if (empty($_POST['full_name']) || empty($_POST['User_name']) || empty($_POST['email']) || empty($_POST['password']))
    {
        echo "Please fill in the blank field";
    }
    else
    {
        $full_name = $_POST['full_name'];  
        $User_name = $_POST['User_name'];
        $email = $_POST['email'];
        $password =password_hash($_POST['password'],PASSWORD_BCRYPT);

        $query = "INSERT INTO sign_up(full_name, User_name, email, password) VALUES ('$full_name', '$User_name', '$email', '$password')";

        $result = mysqli_query($connection,$query);

        if($result)
        {
            header("location:view.php"); 
        }
        else
        {
            echo "There is an error in your QUERY STATEMENT.Please check and try again".mysqli_connect_error();
        }
    }
}
else
{
    header(("location:index.html"));
}
