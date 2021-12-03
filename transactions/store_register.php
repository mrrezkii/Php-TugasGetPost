<?php
$conn = null;
include "../components/error.php";
include "../components/connection.php";

$id = time();
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];


try {
    $checkId = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'"));
    $checkUsername = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"));

    if ($checkId > 0) {
        echo "<script>alert('ID telah digunakan');</script>";
        header("refresh:0.1; URL= ../register.php");
    } else if ($checkUsername > 0) {
        echo "<script>alert('Username telah digunakan');</script>";
        header("refresh:0.1; URL= ../register.php");
    } else {
        $query = "INSERT INTO user VALUES ('$id', '$name', '$username', '$password')";
        $queryExecute = mysqli_query($conn, $query);

        if ($queryExecute) {
            header("Location: ../login.php?created=true");
        } else {
            echo "<script>alert('Register gagal');</script>";
        }
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}