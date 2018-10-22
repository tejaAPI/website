<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$regno = $_POST['regno'];
$password = $_POST['password'];
$con=mysqli_connect ("localhost","root","");
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'placements'))
{
	echo 'Database not selected';
}
$result = mysqli_query($con,"SELECT regno, pwd FROM users WHERE regno = '".$regno."' && pwd = '".$password."'");

if (mysqli_num_rows($result) > 0 ) {
    echo 'Login Success';
	header("location:../after.html");
} else {
    echo 'Incorrect Email and Password';
}
}
?>
