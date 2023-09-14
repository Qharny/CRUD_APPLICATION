<?php
include_once "include/db_connect.php";
$UserID = $_GET['GetUserID'];

$query = "SELECT * FROM sign_up WHERE UserID = '$UserID'";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $UserID = $row['UserID'];
    $full_name = $row['full_name'];
    $User_name = $row['User_name'];
    $email = $row['email'];
    if (isset($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>CRUD -Update Registration Form</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="index.html" width="30">EDIT PAGE</a>
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
                        <h3 class="bg-info text-white text-center py-3">Update Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php?UserID=<?php echo $UserID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="full name" name="full_name" value=<?php echo $full_name ?> required>
                            <input type="text" class="form-control mb-2" placeholder="user name" name="User_name" value=<?php echo $User_name ?> required>
                            <input type="email" class="form-control mb-2" placeholder="user email" name="email" value=<?php echo $email ?> required>
                            <input type="password" class="form-control mb-2" placeholder="password" name="password" required>
                            <button class="btn btn-info" name="update">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>