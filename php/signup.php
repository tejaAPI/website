<?php
$con=mysqli_connect ("localhost","root","");
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'placements'))
{
	echo 'Database not selected';
}
        $regno=$_POST['regno'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
		$mobnum=$_POST['phone'];
        $email=$_POST['email'];
        $pwd=$_POST['password'];
		
		
		
	$query="insert into users(regno,fname,lname,email,mobnum,pwd) values('$regno','$fname','$lname','$email','$mobnum','$pwd')";
//echo $query;

if(!mysqli_query($con,$query))
{
	echo 'not inserted';
}
else
{
	echo "Registered succesfully";
	header("Location:../admin.html");
}


?>