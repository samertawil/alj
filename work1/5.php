<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	<?php 
	$host='localhost';
	$user='root';
	$pass='';
    $conn=new MySQLi($host,$user,$pass);
	$db=mysqli_select_db($conn,'test');
	$req=("select * from emp");
	$query=mysqli_query($conn,$req);
	while($fetch=mysqli_fetch_object($query))

	{
	echo $fetch->emp_id." ";
	echo $fetch->emp_name."</br>"."<hr>";
	}
	
	?>
		
	new mysqli
	mysqli_select_db
	mysqli_query
	mysqli_fetch_object
	
	$conn=new mysqli($host,$user,$pass)
	$db=mysqli_select_db($conn,'schema_name');
	$req="query select statment";
	$query=mysqli_query($conn,$req);
	while -> mysqli_fetch_object($query)
	
	
</body>
</html>