<?php
$optn = $_GET['r'];
abstract class Shape
{
abstract function area();
}
class Triangle extends Shape
{
var $base;
var $height;
function __construct($base,$height)
{
$this->base = $base;
$this->height = $height;
}
function area()
{
$area_tri = (1/2)*($this->base)*($this->height);
echo "<h1>Area of Triangle is : ".$area_tri;
}
}
class Square extends Shape
{
var $side;
function __construct($side)
{
$this->side = $side;
}
function area()
{
$area_sq = $this->side * $this->side;
echo "<h1>Area of Square is : ".$area_sq;
}
}
class Circle extends Shape
{
var $radius;
function __construct($radius)
{
$this->radius = $radius;
}
function area()
{
$area_cir = 2 * 3.14 * $this->radius * $this->radius;
echo "<h1>Area of circle is : ".$area_cir;
}
}
if($optn == 'tri')
{
$obj = new Triangle(4,6);
$obj-> area();
exit;
}
if($optn == 'sq')
{
$obj = new Square(6);
$obj-> area();
exit;
}
if($optn == 'cir')
{
$obj = new Circle(3);
$obj-> area();
exit;
}
?>