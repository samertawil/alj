<!doctype html>
<html>
<head >
<meta charset="utf-8">
<title>شاشة اضافة الموظفين</title>

   
	<link rel="stylesheet" href="new_css.css">
</head>

<body align="right"   >
	<header>
		<div id="menu_id" >
		menu1111
			 
		</div>
     <h2 id="header_id1" > نظام ادارة شؤون الموظفين </h2><hr>
		
		
           
   </header>
	
	
	
	

	<form id="form_id" action="hr_action.php" method="POST" >
	<div id="item1" style="background-color: aliceblue">
 
	
	<input  type="number" name="id_num" min="400000000" max="999999999" class="cl_item" placeholder="رقم الهوية"  dir="rtl" Autofocus />
	<label for="id_num" class="cl2" >رقم الهوية</label><br>

 	<input type="text" name="emp_name" class="cl_item" placeholder="اسم الموظف"   dir="rtl" />
	<label for="">اسم الموظف</label><br>  
	 
		
	<input type="number" name="sal" class="cl_item" placeholder="الراتب الشهري"  dir="rtl"/>
    <label for="">الراتب الشهري</label><br>
		 
	 
	
	
	  
	<select name="s_id" class="cl_item" dir=rtl>
		
	<option>اختار الدائرة</option>
		<?php foreach($query2 as $key=>$value){?>
		
	<option    value="<?=$value['s_id'];?>">   <?=$value['s_name'];?></option>
		
		
		
		<?php } ?>
		
	</select>
<label for="">الدائرة</label>
	</br> 

</div>

 <div id="button1" style="background-color:lightskyblue">
	
	<hr>
	<button type="submit" name="send" >حفظ</button>
</div>
	</form>
	


	
	
	
 
</body>
</html>