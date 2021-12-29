 
<?php
$name1="samer"."  "."isam"." tawil";
$name2 =" samer";
$name2 .=" isam";
$name2 .=" "."tawil";

echo   "<h1>" .$name1.$name2. "</h1>" ;
echo   $name2 ."<h1>"; 
?>


<?php
 
$x= 5 ;
if ($x==5){echo "yes its 5";}
	
else  {echo "wrong value";}

?>

<?php
$x="5";
if ($x===5){echo "yes its 5";}
	
else  {echo  "wrong value";}
 /*  علامة ال3 === هي للتحقق من انه نوع المتغير وقيمته 
*/
?>

<?php
$x=4;
switch($x){
	case 4:
		echo"its 4";
		break;
	case 5:
		echo "its 5";
		break;
	default: 
		echo "لم يتحقق الشرط";
		
		
}
?>

<?php 
$x=1;
while($x<=20){
	echo "<h1>". $x ."</h1>";
	++$x;
	 
}
?>
-----------------------
<?php 
$x=1;
//$z=2;
while($x<=20){
	$z= $x*2;
	echo "<h1>". $x ."*2=".$z ."</h1>";
	++$x;
	//$z= $x*2;
	 
}

?>
-------------------

<?php

for($x=1; $x<=20; ++$x  ){ 
	echo "<h1>" .$x ."</h1>";
	
}

?>
-------------------
<?php
$x = array("name"=>"samer" , "age"=>"30");
echo "<pre>";
echo "<h1>";
print_r($x);
echo "</pre>";
echo "</h1>";

?>

---------------
<?php
$school= array
	("class1"=>array("samer","tawil"),
     "class2"=>array("hesham","tawil"));
echo "<pre>";
echo "<h1>";
print_r($school);
echo "</pre>";
echo "</h1>";
?>
--------------------

 <?php
$school= array( 1,2,3,"u" ) ;
         echo "<pre>";
         echo "<h1>";

foreach($school as $value) 
{echo $value."<br/>";}

        echo "</pre>";
        echo "</h1>";
?>
  
--------------------
 <?php
$school= array( "c1"=>1,"c2"=>2,"c3"=>3,"c4"=>"u" ) ;
         echo "<pre>";
         echo "<h1>";

foreach($school as $key=>$value) 
{echo $key.":".$value."<br/>";}

        echo "</pre>";
        echo "</h1>";
?>
  
------------------------

<?php

function x1(){
	echo "<h1>"."hello aaa <br/><h1>";
	echo "welcom";
	
}
x1();
?>

<?php

function x($name1,$name2){
	echo "<h1>"."hello $name1 $name2<br/><h1>";
	echo "welcom";
	
}
x("samer","tawil");
?>
----------------

<?php
include("2.php");
echo("<br/><h1>".$x);

require ("2.php");
echo("<br/><h1>".$x);

include("22.php");
echo("<br/><h1>".$x);
echo "hh";

//require ("22.php"); // stop all web if there any error
//echo("<br/><h1>".$x);
//echo "hh"; // this step will not process// 

?>
------------------
 
 <form method="post">
   email  <input type="email" name="email"/>
	pass <input type="password" name="password"/>
 <button type="submit" name="submit">submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
echo $_POST['email']	;
	
}

?>
----------------

<form method="post">
<input type="email" name="email"/>
<input type="password" name="password"/>
<input type="datetime" name="date1" />
<button type="submit" name="submit"/>submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
	 if($_POST['email'] == "12@g.com") 
		 
	{ echo "done"; 
	 echo "your email is:". $_POST['email']."</br>"; }
	             
				 
			     	                    
	
	             else {echo "wrong ";   }
					  
					  
	}
?>
---------------
/<?php
//phpinfo();
?>
--------------

<a href=""></a>

<button></button>

<ul>
<li>home</li>
<li>about</li>
</ul>
	
	
<ol>
<li>home</li>
<li>about</li>
</ol>

<dl>
<dt>names</dt>
<dd>samer</dd>
<dd>hesham</dd>
<dt>names</dt>
<dd>samer</dd>
<dd>hesham</dd>
</dl>

