<head>
<link rel="stylesheet" href="bootstrap.min.css">
</head>

<?php

$string="samer tawil";

echo $string ; echo "<br>";

echo strtolower($string);  echo "<br>";
     
echo strtoupper($string); echo "<br>";
    
echo strlen($string); echo "<br>";
 	 
echo $string[7]; echo "<br>";
	
echo $string[7]="aaa"; echo "<br>";
	
echo substr($string,5); echo "<br>";
	
echo substr($string,5,4); echo "<br>";
	
echo  str_replace("samer","hesham", $string ); echo "<br>";
	 
echo abs(-30); echo "<br>";
echo round(3.4); echo "<br>";
echo round(3.6); echo "<br>";
echo floor(3.8); echo "<br>";
echo ceil(3.8); echo "<br>";
echo ceil(3.1); echo "<br>";  
echo ceil(3.1)*ceil(4.2); echo "<br>";
$num=5;
$num++;
echo $num; echo "<br>";
$num+=4;
echo $num; echo "<br>";
echo max(3,10); echo "<br>";
echo min(3,10,1,0,9); echo "<br>";
?>
 

	<form>

	<input type="text" name="t1"> 
	<input type="submit" class="btn btn-primary"> 
	<button type="submit" name="go" > dd</button>
		
	</form>

<?php
$a1=array("sam","tawil");


print_r($a1);

	 