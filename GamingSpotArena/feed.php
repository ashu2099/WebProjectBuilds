<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gspot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST["realname"];
$email=$_POST["email"];
$feed=$_POST["feed"];
$sql = "INSERT INTO userfeed (name, email, feedback)
VALUES ('$name','$email','$feed')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>