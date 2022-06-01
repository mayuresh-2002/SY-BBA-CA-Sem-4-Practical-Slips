<?php
class calculate
{
	public $a,$b;
	function __construct($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
	}
	public function add()
	{
		$c=$this->a+$this->b;
		echo"Addition is:$c <br>";
	}
	public function sub()
	{
		$c=$this->a-$this->b;
		echo"substraction is:$c <br>";
	}
	public function mul()
	{
		$c=$this->a*$this->b;
		echo"multiplication is:$c <br>";
	}
	public function div()
	{
		$c=$this->a/$this->b;
		echo"division is:$c <br>";
	}
}
$obj=new calculate(3,4);
$obj->add();
$obj->sub();
$obj->mul();
$obj->div();
?>