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
      
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $date=$_POST['date'];
		$dept=$_POST['dept'];
		
		
		
		
	$query="insert into registration(name,email,date,department) values('$name','$email','$date','$dept')";
//echo $query;

if(!mysqli_query($con,$query))
{
	echo 'not inserted';
}
else
{
	echo "Registered succesfully";
	header("Location:../a1.html");
}


?>