<?php
class employee
{
public $id;
public $name;
public $dept;
public $sal;

public function __construct($id,$name,$dept,$sal)
{
 $this->id=$id;
 $this->name=$name;
 $this->dept=$dept;
 $this->sal=$sal;
}
}
class Manager extends employee
{
private $bonus;

public function __construct($id,$name,$dept,$sal,$bonus)
{
parent::__construct($id,$name,$dept,$sal);
$this->bonus=$bonus;
}
}

class emp_sal extends Manager
{
 protected $account_no;
 protected $joining_date;
 protected $basic_pay;
 protected $earnings;
 protected $deduction;

function __construct($id,$name,$dept,$account_no,$joining_date,$basic_pay,$earnings,$deduction)
{
parent::__construct($id,$name,$dept,$account_no,$joining_date);
$this->account_no=$account_no;
$this->joining_date=$joining_date;
$this->basic_pay=$basic_pay;
$this->earnings=$earnings;
$this->deduction=$deduction;
}

public function agreegate_sal()
{
return(($this->basic_pay+$this->earnings)-$this->deduction);
}

public function display()
{
echo"</br>Employee Code:".$this->id;

echo"</br>Employee name:".$this->name;

echo"</br>Employee department:".$this->dept;

echo"</br>Employee account number:".$this->account_no;

echo"</br>Employee joining date:".$this->joining_date;

echo"</br>Employee earning:".$this->earnings;

echo"</br>Employee Deduction:".$this->deduction;

echo"</br>Employee Total Salary:".$this->agreegate_sal();
}
}

$e1=new emp_sal(1,"Parth","Manager",101,"13/05/2022",50000,20000,2000);
$e2=new emp_sal(2,"Ritu","HR",102,"01/05/2022",58000,28000,2000);
$e3=new emp_sal(3,"Rahul","CEO",103,"03/07/2020",52000,20000,2000);

$sals=array($e1->agreegate_sal(),$e2->agreegate_sal(),$e3->agreegate_sal());

$e1->display();echo"</br>";
$e2->display();echo"</br>";
$e3->display();echo"</br>";

$max=0;
for($i=0;$i<count($sals);$i++)
{
if($max<$sals[$i])
{
$max=$sals[$i];
}
}
?>
