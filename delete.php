<?php
include('./conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `user` WHERE id = $id";
    $result = mysqli_query($conn, $deleteQuery);
    if($result){
        header(('location: display.php'));
    } else{
        die(mysqli_error($conn));
    }
}
