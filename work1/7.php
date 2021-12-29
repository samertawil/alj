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
 
 
	
	if(isset($_POST['send']))
	{
		$emp_id=$_POST['emp_id'];
		$id_num=$_POST['id_num'];
		$emp_name=$_POST['emp_name'];

	
	 	$conn->query(" INSERT INTO emp(emp_id,id_num,emp_name)
                        VALUES ('$emp_id', '$id_num', '$emp_name')") ; 
	
 	
	}
	 
	 ?>
	
	<form method="POST">
		
emp_id	<input type="number" name="emp_id" />
id_num	<input type="number" name="id_num" />
emp_name	<input type="text" name="emp_name" />
		</br>
	
	<button type="submit" name="send">send</button>
	
	 <form/>
	
</body>
</html>