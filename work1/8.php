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
	$db= mysqli_select_db($conn,'test');
	mysqli_set_charset($conn,'utf8');
	
	if(isset ($_POST['send'])){
		
		$id_num=$_POST['id_num'];
		$emp_name=$_POST['emp_name'];
		$emp_note=$_POST['emp_name'];
		$dept_id=$_POST['dept_id'];
		$salary=$_POST['sal'];
		 
	  
	$add_data_emp=("insert into emp ( id_num,emp_name,emp_note,dept_id) 
	 VALUES ( '$id_num', '$emp_name','$emp_note','$dept_id')");
	 
		 $conn->query($add_data_emp);
		 $last_id = $conn->insert_id;
		/* echo  $last_id ;*/
				
	 $add_emp_details=("insert into emp_details (EMP_ID,salary) 
	 VALUES ('$last_id','$salary')"); 
		
	     $conn->query($add_emp_details); 
	 
	
	 
	}
	
	/* 
	
	try {
    $conn->beginTransaction();
    
    $conn->query('first query');
    $conn->query('second query');
    $conn->query('third query');
      
$db->commit();
} catch (\Throwable $e) {
    $db->rollback();
    throw $e; // but the error must be handled anyway
}
	
	$add_data_dept=("insert into dept (dept_name) 
	 VALUES ('$dept_name')");
	 $conn->query($add_data_dept);
	 */
 
	?>
	<form method="POST">
	
	
	id_num<input type="number" name="id_num" />
	emp_name<input type="text" name="emp_name" />
	emp_note<input type="text" name="emp_note" />
	dept_id<input type="number" name="dept_id" />
	<button type="submit" name="send">send</button></br>
	salary<input type="number" name="sal" />
	
	</form>
	
</body>
</html>