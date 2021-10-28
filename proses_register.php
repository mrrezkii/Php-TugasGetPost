<?php
session_start();

$_SESSION['auth'] = true;
$_SESSION['name'] = $_POST['name'];
$_SESSION['username'] = $_POST['username'];

header("Location: index.php");