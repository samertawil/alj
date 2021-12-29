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
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
				
				
				
				
				
				
				
                ?>
		 
		 
		 
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
			
				 
                 while($fetch=mysqli_fetch_object($query))
                { echo " تم تسجيل الدخول باسم / ";					 
	              echo($fetch->  emp_name."</br>");
		        }
				 
		        }
	
			
		
	if(isset($_POST['send'])) {
		
		$id_num=$_POST['id_num'];
		$emp_name=$_POST['emp_name'];
		$salary=$_POST['sal'];
		$dept_id=$_POST['dept_id'];
		
	 
		try { 
			
			$isok=true;
		
		
		$conn->autocommit(false);
			
		$add_emp="insert into emp(id_num,emp_name,dept_id) values('$id_num','$emp_name','$dept_id')";
		
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
	<SELECT  id="dept_id" name="dept_id" class="form-control" placeholder="الدائرة"  dir="rtl"  >
	
		<option  hidden=""   value=null required></option>
	    <option value=1 >تكنولوجيا المعلومات</option>
		<option value=2>المالية</option>
		<option value=3>الشؤون الادارية</option>
		<option value=4>تسجيل الاراضي</option>
		
			
	
	</select>
		 
	<button type="submit" name="send" class="btn btn-primary">حفظ</button>

	</form>
	

 
 <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
	


    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                     <label   for="">رقم الهوية</label>\
	<input type="number" name="id_num" class="form-control" placeholder="رقم الهوية"  dir="rtl" />\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                          <label for="">اسم الموظف</label>\
	<input type="text" name="emp_name" class="form-control" placeholder="اسم الموظف"   dir="rtl" />\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>
	
	
	
 
</body>
</html>