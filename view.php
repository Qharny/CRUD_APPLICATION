<?php
require_once "include/db_connect.php";
$query = "SELECT * FROM sign_up";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>CRUD - View info Page</title>
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
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-secondary text-white text-center py-3">Retrival of Registered Members</h3>
                    </div>
                    <div class="card-body">
                        <p><a class="btn btn-info" href="index.html">+ Add New Record</a></p>
                        <table class="table table-bordered">
                            <tr>
                                <th>User_ID</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $UserID = $row['UserID'];
                                $full_name = $row['full_name'];
                                $User_name = $row['User_name'];
                                $email = $row['email'];

                            ?>
                                <tr>
                                    <td><?php echo $UserID ?></td>
                                    <td><?php echo $full_name ?></td>
                                    <td><?php echo $User_name ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><a class="btn btn-info text-white" href="edit.php?GetUserID=<?php echo $UserID ?>">Edit</a> | <a class="btn btn-danger text-white" href="delete.php?Del=<?php echo $UserID ?>"> Delete </a></td>
                                </tr>
                            <?php
                            } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>