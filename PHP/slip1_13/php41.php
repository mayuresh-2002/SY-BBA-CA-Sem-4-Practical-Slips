<?php

 class Employee

 {

 private $eid,$ename,$edept,$sal;

 function __construct($a,$b,$c,$d)

 {

 $this->eid=$a;

 $this->ename=$b;

 $this->edept=$c;

 $this->sal=$d;

 }

 public function getdata()

 {

 return $this->sal;

 }

 public function display()

 {

 echo $this->eid."  ";

 echo $this->ename." ";

 echo $this->edept." ";

 }

 }

 class Manager extends Employee

 {

 private $bonus;

 public static $total1=0;

 function __construct($a,$b,$c,$d,$e)

 {

 parent::__construct($a,$b,$c,$d);

 $this->bonus=$e;

 }

 public function max($ob)

 {

 $sal=$this->getdata();

 $total=$sal+$this->bonus;

 if($total>self::$total1)

 {

 self::$total1=$total;

 return $this;

 }

 else

 {

 return $ob;

 }

 }

 public function display()

 {

 parent::display();

 echo self::$total1;

 }

}

 $ob=new Manager(0,"ABC","",0,0);

 $ob1=new Manager(1,"Archana","HR",28000,2000);

 $ob=$ob1->max($ob);

 $ob2=new Manager(2,"Adhira","Tester",30000,2500);

 $ob=$ob2->max($ob);

 $ob3=new Manager(3,"Amol","PM",32000,3000);

 $ob=$ob3->max($ob);

 $ob->display();

 ?>