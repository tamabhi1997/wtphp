<?php
	include_once('configdata.php');
	$rollno=$_GET['rollno'];
	$sql1="SELECT * from studentpercentage where rollno=$rollno";
	$result=mysqli_query($_conn,$sql1);

?>
<html>
<head>
	<title>updation of data</title>
</head>
<body>
	<div class="updateform">
	<form method="POST" >
	<br><h2>Name</h2><br><input type="text" name="name" value="">
	<br><h2>Rollno</h2><br><input type="number" name="rollno" value="">
	<br><h2>Class</h2><br><input type="text" name="class" value="">
	<br><h2>percentage</h2><br><input type="number" name="percentage" value="">
	<input type="submit" name="submit" value="submit">
	</form></div>
<?php
	if(isset($_POST['submit']))
	{
	$newname=$_POST['name'];
	$newrollno=$_POST['rollno'];
	$newclass=$_POST['class'];
	$newpercentage=$_POST['percentage'];
	
	$sql2="UPDATE studentpercentage SET name='$newname',rollno='$newrollno',class='$newclass',percentage='$newpercentage' WHERE rollno=$rollno";
	$result2=mysqli_query($_conn,$sql2);
	if($result2){
	echo "data updated";
	}
	else{
	echo "data not updated";
	}
	}



?>
</body>
</html>	