<?php
require_once("include/db_connect.php");

if (isset($_POST['update'])) {
    $UserID = $_GET['UserID'];
    $full_name = $_POST['full_name'];
    $User_name = $_POST['User_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "UPDATE sign_up SET full_name = '$full_name',User_name = '$User_name',email = '$email',password = 'password' Where UserID = '$UserID'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Invalid Query";
    } else {
        header("location:view.php");
    }
} else {
    header("location:view.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>CRUD - Registration Page</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="index.html" width="30">VIEW PAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-lg-auto">
                <a class="nav-item nav-link text-white" href="index.html">sign up</a>
                <a class="nav-item nav-link text-white" href="view.php">view info</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-info text-white text-center py-3">Registered Members</h3>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <input type="text" class="form-control mb-2" placeholder="full name" name="full_name" required>
                            <input type="text" class="form-control mb-2" placeholder="user name" name="User_name" required>
                            <input type="email" class="form-control mb-2" placeholder="user email" name="email" required>
                            <input type="password" class="form-control mb-2" placeholder="password" name="password" required>
                            <button class="btn btn-info" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>