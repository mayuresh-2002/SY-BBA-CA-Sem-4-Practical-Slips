<html>
<head>
<title>Distance Conversion</title>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='GET')
{
?>
<form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
Enter Distance in meter :<input type=text name=t1><br>
<input type=radio name=r1 value=1>Convert into Centimeter<br>
<input type=radio name=r1 value=2>Convert into Kilometer<br>
<input type=submit value=Convert><br>
</form>
<?php
}
else if($_SERVER['REQUEST_METHOD']=='POST')
{
$dist=$_POST['t1'];
$op=$_POST['r1'];
switch($op)
{
	case 1:
		echo "Conversion from meter to centimeter is :";
		$cm=$dist*100;
		echo "$cm";
		break;
	case 2:
		echo "Conversion from meter to Kilometer is :";
		$km=$dist/1000;
		echo "$km";
		break;
}
}
?>
</body>
</html>
