<?php

define('PI',3.14);

define('FOUR_THIRDS', 4/3);

 

abstract class Shape

{

 private $x = 0;

 private $y = 0;

 private $l = 0;

 private $b= 0;

 private $h = 0;

 public abstract function area();

 public abstract function volume();

 }

 

class Rectangle extends Shape

{

        function __construct($x, $y)

          {

                   $this->x = $x;

                   $this->y = $y;

          }

 

          function area() 

         {

                   return $this->x * $this->y;

          }

 

          function volume()

          {

                   return $this->l * $this->b * $this->h;

          }

}

 

 

class Cylinder extends Shape

{

          function __construct($x, $y)

          {

                   $this->x = $x;

                   $this->y = $y;

          }

         

          function area()

          {

                   return $area  =  2*PI*$this->x*($this->x+$this->y);

                  

          }

          function volume()

          {

                   return $vol  =  PI*$this->x*$this->x*$this->y;

                  

          }

}

  

class Circle extends Shape

{

          function __construct($x) 

          {

                   $this->x = $x;

          }

         

          function area () 

        {

         return PI * ($this->x * $this->x);

    }

         

          function volume ()

        {

         return FOUR_THIRDS * PI * ($this->x * $this->x);

    }   

}

          $c   =  new cylinder(12,4);

          echo "<br>Cylinder Area : ".$c->area();

          echo "<br>Cylinder Volume : ".$c->volume();

          echo "<br>-----------------------------------------------------------------";

 

           $r=new Rectangle(12, 4);

          echo "<br>Rectangle Area : ".$r->area();

         

          $r=new Rectangle(12, 4, 4);

          echo "<br>Rectangle Volume : ".$r->area();

         

          echo "<br>-----------------------------------------------------------------";

         

           $circle   =  new Circle(12);

          echo "<br>Circle Area : ".$circle->area();

          echo "<br>Circle Volume : ".$circle->volume();

?>

