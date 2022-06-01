<html>

<head>

<script>

function showHint(str)

{

if (str=="")

{

document.getElementById("mydiv").innerHTML = "";

return;

}

if(window.XMLHttpRequest)

{

XHRobj=new XMLHttpRequest();

}

else

{

XHRobj=new ActiveXObject("Microsoft.XMLHTTP");

}

XHRobj.onreadystatechange = function()

{

if (XHRobj.readyState == 4 && XHRobj.status == 200)

{

document.getElementById("mydiv").innerHTML = XHRobj.responseText;

}

}

XHRobj.open("GET", "select.php?q=" + str, true);

XHRobj.send();

}

</script>

</head>

<body>

<p><b>Student Name:</b></p>

<form>

<?php

$database="test"; //database name

$con =mysqli_connect("localhost","root" ,"","test");//for wamp 3rd feild is balnk

if (!$con)

{

die('Could not connect: ' . @mysqli_error());

}

$result=mysqli_query($con,"select * from student")or die(@mysqli_error());

?>

<select name="sname" onchange="showHint(this.value)">

<option value="">Select Name</option>

<?php while($row=mysqli_fetch_array($result))

{

?>

<option value="<?php echo $row['sname']?>"><?php echo $row['sname']?></option>

 <?php }?>

</select>

</form>

<div id="mydiv"><b> Student info......</b></div>

</body>

</html>

 