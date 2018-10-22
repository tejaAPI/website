<?php
$servername="locahost";
$username="root";
$password="";
$dbname="placements";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
$regno=$_REQUEST['regno'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['pwd2'];
echo $regno;
$sql="INSERT INTO USERS(reg_no,first_name,last_name,phone,email,password,confirm_password) VALUES($regno,$fname,$lname,$phone,$email,$password,$confirm_password)";
if($conn->query($sql)===TRUE)
{
	header("refresh:1;url=after.html");
}
else
{
	echo "Error:".$sql."<br>",$conn->error;
}

?>
