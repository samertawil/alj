<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body >
  
<main class="container">


<?php
	
$host='localhost';
$username = 'root';
$password = '';
$database = new MySQLi($host,$username,$password); 

if ($database->connect_error) {
  die("Connection failed: " . $database->connect_error); }
	  
	  else  { 
		 $database->select_db('test');
}
 

if(isset($_POST['send'])){  
$emp_id = $_POST['emp_id'];
$id_num = $_POST['id_num'];
$emp_name = $_POST['emp_name'];
$emp_note = $_POST['emp_note'];
 
	
	$addData = "INSERT INTO emp(emp_id,id_num,emp_name,emp_note)
VALUES ('$emp_id', '$id_num', '$emp_name','$emp_note')";
	
 
if ($database->query($addData) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $addData . "<br>" . $database->error;
}
}
?>

<form method="POST">
	<div>
emp_id : <input class="form-control" type="number" name="emp_id" required/>
<br>
id_num : <input class="form-control" type="number" name="id_num" required/>
<br>
emp_name : <input class="form-control" type="text" name="emp_name" required/>
<br>
emp_note : <input class="form-control" type="text" name="emp_note" required/>
<br>
<button class="btn btn-danger mt-3" type="submit" name="send">ارسال - Send</button>
</form>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>