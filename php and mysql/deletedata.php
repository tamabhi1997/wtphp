<?php

	include_once('configdata.php');
?>
<html>
<head>
	<title>deletion of data</title>
</head>
<body>

	<?php
	
	$rollno=$_GET['rollno'];
	$sql="DELETE from studentpercentage where rollno=$rollno";
	$result=mysqli_query($_conn,$sql);
	if($result)
	{
	echo "data successfully deleted";
	}
	?>
</body>
</html>