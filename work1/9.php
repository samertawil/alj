<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>شاشة اضافة الموظفين</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="test_css1.css">
</head>

<body align="right" dir="rlt" >
	 
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
	 
		try {	
			
			$isok=true;
			
			$conn->autocommit(false); 
	 
		    $add_data_emp= ("insert into emp ( id_num,emp_name,emp_note,dept_id) 
	                        VALUES ( '$id_num', '$emp_name','$emp_note','$dept_id')");
		 
		 
		if( !$conn->query($add_data_emp)) {$isok=false;}
			
			
		    $last_id = $conn->insert_id;
		    $add_emp_details=("insert into emp_details (EMP_ID,salary) 
	                           VALUES ('$last_id','$salary')"); 
	 
		 
		if( !$conn->query($add_emp_details)) {$isok=false;}	
			
			
			
		if($isok==true)  {
				
	                      if(   $conn->commit() === TRUE ) { echo "<h4>"."تم ادخال البيانات بنجاح"."</h4>"; }  
			
			             } 
			
		else {$conn->rollback(); echo "لم يتم ادخال البيانات";}
		
			
	} catch 
			(\Throwable $e){ $conn->rollback(); 
   
    throw $e;   
}
		 
	}
	 
 

	?>

	<form method="POST">
	<div>
		
	
	<input  type="number" name="id_num" required/> هوية الموظف 
	<input   type="text" name="emp_name" requied/> اسم الموظف  
	<input   type="text" name="emp_note" /> ملاحظات </br>
	<input   type="number" name="dept_id" requied/> الدائرة 
	<input  type="number" name="sal" /> الراتب الشهري  
				 
	</div>
	
	<div2>
	
	<button type="submit" class="btn btn-danger mt-3" name="send">حفظ</button>
	</div2>
	</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</body>
</html>