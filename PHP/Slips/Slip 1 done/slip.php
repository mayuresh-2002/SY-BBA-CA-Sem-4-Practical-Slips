SLIP 1
Q.2.a.Write a PHP program to create a simple calculator that can accept two numbers and perform operations like add, subtract, multiplication and divide (using class concept)



<?php

class Calculator
{

  private  $num1;
  private  $num2;
     public function  __construct($num1,$num2)
       {
         $this->num1 = $num1;
         $this->num2 = $num2;
        }

     public function add()
     {
       echo "<BR><B>Addition of two number is :".($this->num1+$this->num2);
     }
  
    public function subtract()
     {
       echo "<BR><B>Subtraction of two number is :".($this->num1-$this->num2);
     }

    public function  multiply()
     {
       echo "<BR><B>Multiplication of two number is :".($this->num1*$this->num2);
     }

  public function divide()
     {
       echo "<BR><B>Divison of two number is :".($this->num1/$this->num2);
     }

}


    $calc  = new Calculator(3,4);
    echo $calc->add();
   echo $calc->subtract();
   echo $calc->multiply();
  echo $calc->divide();



?>
