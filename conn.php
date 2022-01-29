<?php
$conn = new mysqli('localhost', 'root', '', 'crudops');

if (!$conn) {
    die(mysqli_error($conn));
}
