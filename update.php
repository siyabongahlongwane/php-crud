<?php
include('./conn.php');
$id = $_GET['id'];
$selectQuery = "SELECT * FROM `user` WHERE id = $id";
$result = mysqli_query($conn, $selectQuery);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    if (!empty($name) && !empty($mobile) && !empty($email) && !empty($password)) {
        $updateQuery = "UPDATE `user` set id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = $id";
        $result = mysqli_query($conn, $updateQuery);
        if ($result) {
            header('location: display.php');
        } else {
            die(mysqli_error($conn));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP | USER PAGE</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name ?>" id="exampleInputEmail1" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email ?>" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $mobile ?>" id="exampleInputPassword1" placeholder="Enter mobile">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $password ?>" id="exampleInputPassword1" placeholder="Enter password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>