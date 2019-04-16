<?php

	include_once('configdata.php');
?>

<html>
<head>
	<title>view student data</title>
</head>
<body>
	<center><a href="studentdata.html">ADD DATA</a></center>
	<center><table border="2">
	<tr>
		<td><h2>name</h2></td>
		<td><h2>rollno</h2></td>
		<td><h2>class</h2></td>
		<td><h2>percentage</h2></td>
		<td><h2>updates</h2></td>
	</tr>

	<?php
	$sql="SELECT * from studentpercentage order by percentage DESC";
	$result=mysqli_query($_conn,$sql);

	while($res=mysqli_fetch_array($result))
	{
	?>
		<tr>
		<td><?php echo $res['name'];?></td>
		<td><?php echo $res['rollno'];?></td>
		<td><?php echo $res['class'];?></td>
		<td><?php echo $res['percentage'];?></td>
		<td><a href="updatedata.php?rollno=<?php echo $res['rollno'];?>">update<a href="deletedata.php?rollno=<?php echo $res['rollno'];?>">delete</a></td>
		
		</tr>
	<?php
	}
	?>
	</table>
	</center>
	
		
</body>
</html>