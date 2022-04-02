<?php
session_start();
include "library/config.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);

if ($jml>0){
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['role'] = $data['role'];
    header('location:index.php'); /*redirect browser*/
}
else{
    echo "<p align='center'> Login Gagal</p>";
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
}
?>