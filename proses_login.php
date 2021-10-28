<?php
session_start();

$_SESSION['auth'] = true;
$_SESSION['username'] = $_POST['username'];

header("Location: index.php");