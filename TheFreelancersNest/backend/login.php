<?php
session_start();
include 'dbhandler.php';

$usernameOrEmailLogin = $_POST['usernameOrEmailLogin'];
$pwdLogin = $_POST['pwdLogin'];


$sql = "SELECT * FROM user WHERE (Username='$usernameOrEmailLogin' AND Password='$pwdLogin')
                              OR (Email='$usernameOrEmailLogin' AND Password='$pwdLogin')";
$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result))
{
	$message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');window.location = '../freenest.html';</script>";
}
else
{
	$_SESSION['Id'] = $row['Id'];
	$_SESSION['Username'] = $row['Username'];
	header("Location: ../dashboard.php");
}

