<?php
session_start();
include 'dbhandler.php';

$usernameRegister = $_POST['usernameRegister'];
$emailRegister = $_POST['emailRegister'];
$pwdRegister = $_POST['pwdRegister'];


$sql = "INSERT INTO user (Username,Email,Password)
VALUES ('$usernameRegister','$emailRegister','$pwdRegister')";
$result = mysqli_query($conn,$sql);

        /*if you wanna implement direct account acces after signup, Use this code.
        
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            $_SESSION['Id']=$last_id;
            $_SESSION['Username']=$usernameRegister;
        }*/
?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registration Successful.</title>

<link href="../css/ait.css" rel="stylesheet" type="text/css">
<link href="../css/register.css" rel="stylesheet" type="text/css">

<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
</head>

<body>
<div class="col-xs-12 cover">
<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-3 card">
<img class="logoimg img-responsive" width="200px" src="../resources/logow.png">

<div class="col-xs-12 content">
<h2 class="heading">Congratulations,<br><?php echo "$usernameRegister"; ?></h2>
<p class="regmsg">You have succesfully registered on<br> The Freelancers' Nest. <br>Login into your account using your username: "<?php echo "$usernameRegister"; ?>" and password.</p>
<br><br>
<a class="anc" href="../freenest.html"><button class="butt">Back to Home Page</button></a>
</div>

</div>
</div>

</body>
</html>
