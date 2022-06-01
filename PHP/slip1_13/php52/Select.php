<?php

$database="test"; //database name

$q=$_GET["q"];

$con=@mysqli_connect("localhost","root" ,"", "test");//for wamp 3rd feild is balnk

if(!$con)

{

die('Could not connect: ' . @mysql_error());

}

$result=@mysqli_query($con,"select * from student where sname='$q'")or die(@mysqli_error());

echo"<table border='1'>";

echo"<tr><th>sno</th><th>sname</th><th>per</th></tr>";

while($row=@mysqli_fetch_array($result))

{

echo"<tr><td>";

echo $row['sno'];

echo"</td><td>";

echo $row['sname'];

echo"</td><td>";

echo $row['per'];

echo"</td></tr>";

}

echo"</table>";

@mysqli_close($con);

?>