<?php
$user=$_GET['text'];
if($user=="")
$str="Enter username";
else if(strlen($user)<3)
$str="user name is too short";
else
$str="valid username";
echo $str === "" ? "no suggestion" : $str;
?>