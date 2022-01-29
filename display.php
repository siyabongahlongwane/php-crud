<?php
include('./conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP | DISPLAY USERS</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
    <h1 class="display-5 mt-5">Display Users</h1>

        <button class="btn btn-primary my-1"><a class="text-light" href="user.php">Add user</a></button>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selectQuery = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $selectQuery);
                if ($result) {
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '
                        <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td><button class="btn btn-primary"><a href="update.php?id='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?id='.$id.'" class="text-light">Delete</a></button></td>
                </tr>
                        ';
                    }
                }
                ?>
                
      
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>