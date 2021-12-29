<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>شاشة اضافة الموظفين</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="test_css1.css">
</head>

<body align="right" dir="rlt" >
	
	  <div class="container">  
        <div class="row">
            <div class="col-md-12">
	        </div>      
  	    </div>
      </div>  
	 <div class="card mt-4">
                    <div class="card-header">
						
                        <h4 align="center"> اضافة موظفين - نظام شؤون الموظفين
            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>   	 
                        </h4>
							
                    </div>
		 
		 
		 
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
                { echo " تم تسجيل الدخول باسم / ";					 
	              echo($fetch->  emp_name."</br>");
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
	
	
	
	
	

	<form method="POST" >
	</br>
		 
	<label   for="">رقم الهوية</label>
	<input type="number" name="id_num" class="form-control" placeholder="رقم الهوية"  dir="rtl" />
	<label for="">اسم الموظف</label>
	<input type="text" name="emp_name" class="form-control" placeholder="اسم الموظف"   dir="rtl" />
	<label for="">الراتب الشهري</label>
	<input type="number" name="sal" class="form-control" placeholder="الراتب الشهري"  dir="rtl"/>
		 
	  <label for="">الدائرة</label>
		 
	<select name="s_id" class="form-control" dir=rtl>
		
	<option>اختار الدائرة</option>
		<?php foreach($query2 as $key=>$value){?>
		
	<option value="<?=$value['s_id'];?>">   <?=$value['s_name'];?></option>
		
		
		
		<?php } ?>
	
	</select>
		 
	<button type="submit" name="send" class="btn btn-primary">حفظ</button>

	</form>
	

 
 <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
	

	
	
	
 
</body>
</html>