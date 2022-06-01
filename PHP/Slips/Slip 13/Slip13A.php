<html>
<h1> Employee Details </h1>
<body>
<form method=GET action="welcome.php">

Enter Employee name
<input type=text name=t1 value="<?php 
if(isset($_GET['t1'])) echo$_GET['t1'];?>"> <br><br>

Enter Employee id
<input type=text name=t2 value="<?php 
if(isset($_GET['t2'])) echo$_GET['t2'];?>"> <br><br>

Enter Employee age
<input type=text name=t3 value="<?php 
if(isset($_GET['t3'])) echo$_GET['t3'];?>"> <br><br>

Enter Employee address
<input type=text name=t4 value="<?php 
if(isset($_GET['t3'])) echo$_GET['t3'];?>"> <br><br>

<input type=submit value=submit> <br><br>
<input type=reset value=reset>
</form>
</body>
</html>

<?php
if($name==""||$id==""||$age==""||$address==""){
	echo"All fields are compulsory";
}
else
{
	$name=$_GET['t1'];
	$id=$_GET['t2'];
	$age=$_GET['t3'];
	$add=$_GET['t4'];
	echo"<h1>Employee Deatils:</h1> <br>";
	
	echo"Employee name:$name</br>";
	echo"Employee id:$id</br>";
	echo"Employee age:$age</br>";
	echo"Employee address:$add</br>";
}
?>

