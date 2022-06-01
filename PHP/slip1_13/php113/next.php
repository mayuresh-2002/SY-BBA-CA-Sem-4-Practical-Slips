<?php
if(isset($_POST['submit']))
{
 $sno=$_POST['sno'];
 $sname=$_POST['sname'];
 $city=$_POST['city'];
 
 if((!empty($sno))&&(!empty($sname))&&(!empty($city)))
  echo"<b>$sno</b><br>";
  echo"<b>$sname</b><br>";
  echo"<b>$city</b><br>";
}

?>
