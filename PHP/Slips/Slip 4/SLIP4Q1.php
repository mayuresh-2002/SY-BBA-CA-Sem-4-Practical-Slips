<?php
 class employee
 {
     protected $id;
    protected $name;
    protected $department;
   protected $salary;

     public   function __construct($id,$name,$dept,$sal)
       {
         $this->id = $code;
         $this->name = $name;
         $this->department = $dept;
         $this->salary = $sal;
         
       }
} 
class  Manager extends employee
 {
      protected $bonus;
     
        public function __construct($id,$name,$dept,$sal,$bonus)
       {
        parent::__construct($id,$name,$dept,$sal);
         $this->bonus = $bonus;
       }
}
class  emp_sal extends emp_account
{
   protected $basic_pay;
   protected $earnings;
   protected $deduction;

        function __construct($code,$name,$designation,$account_no,$joining_date,$basic_pay,$earnings,$deduction)
       {
          parent::__construct($code,$name,$designation,$account_no,$joining_date);
         $this->basic_pay = $basic_pay;
         $this->earnings = $earnings;
         $this->deduction = $deduction;
       }

     public function agreegate_sal()
      {
               return    (($this->basic_pay+$this->earnings )-$this->deduction);
      }
       
      public  function display()
      {
      echo   "<BR/>Employee Code :".$this->code;

     echo   "<BR/>Employee Name :".$this->name;
     echo   "<BR/>Employee Designation :".$this->designation;
      echo   "<BR/>Employee account no :".$this->account_no;
      echo   "<BR/>Employee joining date :".$this->joining_date;
      echo   "<BR/>Employee basic pay :".$this->basic_pay;
      echo   "<BR/>Employee earning :".$this->earnings;
      echo   "<BR/>Employee deductions :".$this->deduction;
      echo   "<BR/>Employee Total Salary :".$this->agreegate_sal(); 
      }      
}
$e1 = new emp_sal(1,"Kuldeep","Manager",101,"31/5/1994",50000,20000,2000);
$e2 = new emp_sal(2,"KuldeepI","Manager",102,"31/5/1994",58000,28000,2000);
$e3 = new emp_sal(3,"KuldeepII","Manager",103,"31/5/1994",52000,20000,2000);
$e4 = new emp_sal(4,"KuldeepIII","Manager",104,"31/5/1994",52000,20000,2000);
$e5 = new emp_sal(5,"KuldeepIV","Manager",105,"31/5/1994",52000,20000,2000);

$sals = array($e1->agreegate_sal(),$e2->agreegate_sal(),$e3->agreegate_sal(),$e4->agreegate_sal(),$e5->agreegate_sal());

$e1->display();
$e2->display();
$e3->display();
$e4->display();
$e5->display();

$max = 0;
for($i = 0;$i < count($sals);$i++)
{
             if($max < $sals[$i])
                {
                              $max = $sals[$i];
                }
}


echo "<BR/>Maximum Salary is ".$max;
?>
