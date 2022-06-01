
<?php
class Calculator
{
var $value_1;
var $value_2;
function __construct($value_1,$value_2)
{
$this->value_1 = $value_1;
$this->value_2 = $value_2;
}
function performCalc()
{
global $optn;
if($optn == 'add')
echo "<h2>Addition : <h2> ".($this->value_1 + $this->value_2);
else
if($optn == 'sub')
{
echo "<h2>Substraction(".$this->value_1."-".$this->value_2.") : <h2> ".($this->value_1 - $this->value_2);
echo "<h2>Substraction(".$this->value_2."-".$this->value_1.") : <h2> ".($this->value_2 - $this->value_1);
}
else
if($optn == 'mult')
echo "<h2>Multiplication : <h2> ".($this->value_1 * $this->value_2);
else
if($optn == 'div')
{
echo "<h2>Division(".$this->value_1."/".$this->value_2.") : <h2> ".($this->value_1 / $this->value_2);
echo "<h2>Division(".$this->value_2."/".$this->value_1.") : <h2> ".($this->value_2 / $this->value_1);
}
echo "<br><br><a href=calculator.html>Back</a>";
}
}
$optn = $_GET['optn'];
$value_1 = $_GET['v1'];
$value_2 = $_GET['v2'];
$obj = new Calculator($value_1,$value_2);
$obj -> performCalc();
?>
