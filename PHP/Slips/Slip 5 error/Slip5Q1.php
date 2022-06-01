<?php
define('pi',3.14);
abstract class shape
{
	abstract function calc_area($r,$h,$l,$b);
	abstract function calc_volume($r,$h,$l,$b);
}
class cylinder extends shape
{
	abstract function calc_area($r,$h)
	{
		return 2*pi*$r*($r+$h);
	}
	abstract function calc_vol($r,$h)
	{
		return $r*$r*$r*$h;
	}
}
class rectangle extends shape
{
	abstract function calc_area($l,$b)
	{
		return $l*$b;
	}
	abstract function calc_vol($l,$w,$b)
	{
		return $l*$w*$h;
	}
}
class circle extends shape
{
	abstract function calc_area($r,$h)
	{
		return pi*$r*$r;
	}abstract function calc_vol($r,$h)
	{
		return 4/3*pi*$r*$r*$r;
	}
}
$r=$_GET['r'];
$h=$_GET['h'];
$l=$_GET['l'];
$b=$_GET['b'];

$ob=new cone();
echo"area of cone",$ob->calc_area($r,$h);
echo"<br>";
echo"volume of cone",$ob->calc_vol($r,$h);
echo"<br>";

$ob=new rectangle();
echo"area of cone",$ob->calc_area($l,$b);
echo"<br>";
echo"volume of cone",$ob->calc_vol($l,$b,$w);
echo"<br>";


$ob=new circle();
echo"area of cone",$ob->calc_area($r,$h);
echo"<br>";
echo"volume of cone",$ob->calc_vol($r,$h);
echo"<br>";

?>