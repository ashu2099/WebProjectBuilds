<?php

$conn=mysqli_connect("localhost","root","","freenest");

if(!$conn)
{
	die("Connection Failed,Motherfucker".mysqli_connect_error());
}