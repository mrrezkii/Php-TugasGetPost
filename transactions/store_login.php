<?php
$conn = null;

include "../components/error.php";
include "../components/connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $queryExecute = mysqli_query($conn, $query);
    $row = mysqli_num_rows($queryExecute);

    if ($queryExecute) {
        if ($row > 0) {
            session_start();
            $data = mysqli_fetch_array($queryExecute);
            $_SESSION['logged_in'] = true;
            $_SESSION['id'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            header("Location: ../index.php?logged_in=true");
        } else {
            header("refresh:0.1; URL= ../login.php?logged_in=false");
        }
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}