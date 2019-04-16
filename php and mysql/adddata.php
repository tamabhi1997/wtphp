<?php
	include_once('configdata.php');
	if(isset($_POST['submit']))
	{
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$class=$_POST['class'];
	$percentage=$_POST['percentage'];
	
	$sqli="INSERT into studentpercentage(name,rollno,class,percentage) VALUES('$name','$rollno','$class','$percentage')";

	$result=mysqli_query($_conn,$sqli);
	if($result)
	{
	echo "data added successfully";
	}
	else
	{
	echo "data not added";
	}
	}
?>
	