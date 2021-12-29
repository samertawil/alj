<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="new_css.css">
</head>

	<body>
			 
	<?php

		
		
$host='localhost' ;
$user='root';
$pass='';
$conn=new mysqli($host,$user,$pass);
mysqli_set_charset($conn,'UTF8');
		 

   
                 
	 
	if($conn->connect_error)    { die("خطا بالاتصال"); }
	
	ELSE 	    {$db=mysqli_select_db($conn,'test');
				 $req=("select emp_name from users where user_name='$user'");
				 $query=mysqli_query($conn,$req);
			
				 
				 $req2=("select s_id,s_name from status");
	             $query2=mysqli_query($conn,$req2);
				 
				 
                 while($fetch=mysqli_fetch_object($query))
                { 
				  
					 echo "" ?> <p> تم تسجيل الدخول باسم </p> <?php 					 
	              echo($fetch->  emp_name."<hr>");
		        }
				 
		        }
	
			
		
	if(isset($_POST['send'])) {
		
		$id_num=$_POST['id_num'];
		$emp_name=$_POST['emp_name'];
		$salary=$_POST['sal'];
		/*$dept_id=$_POST['dept_id'];*/
		$s_id=$_POST['s_id'];
		
	 
		try { 
			
			$isok=true;
		
		
		$conn->autocommit(false);
			
		$add_emp="insert into emp(id_num,emp_name,dept_id) values('$id_num','$emp_name','$s_id')";
		
	if(!$conn->query($add_emp))  {$isok=false;} 
		
	    $last_id=$conn->insert_id;
		
		$add_det="insert into emp_details(emp_id,salary) values('$last_id','$salary')";
		
		
		if(!$conn->query($add_det)) {$isok=false;} ;
		
		 
	if($isok===true) {
		
	if ($conn->commit()===TRUE) {echo  "</br>"."تم الحفظ بنجاح"."</br>" ; }
		
	                   $req1=("select emp_name from emp where emp_id='$last_id'");
	                   $query1=mysqli_query($conn,$req1)	;
		               while($fetch=mysqli_fetch_object($query1))
		                  
		               {echo $fetch->emp_name ;}
		
		
	}
			else {$conn->rollback(); echo " لم يتم ادخال البيانات";}
		} catch 	(\Throwable $e){ $conn->rollback(); 
   
    throw $e;   
		}
		 
		}
	 
	?>
	
	
	

</body>
	
	
	 
	
	
	
	
	
	
	 
	
</html>