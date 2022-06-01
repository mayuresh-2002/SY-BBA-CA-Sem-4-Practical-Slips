<HTML>
<BODY>
<FORM method=POST action="<?php echo $_SERVER['PHP_SELF'] ?>">
Enter   First   Value  :<INPUT type=text name=a><BR><BR>
Enter Second Value:<INPUT type=text name=b><BR><BR>
<b>Select Arithmetic Operation</b><BR><BR>
<INPUT type=radio name="choice" value="1">Addition<BR><BR>
<INPUT type=radio name="choice" value="2">Subtraction<BR><BR>
<INPUT type=radio name="choice" value="3">Multiplication<BR><BR>
<INPUT type=radio name="choice" value="4">Division<BR><BR>
<INPUT type=submit name=submit value="Calculate"><BR>
</FORM>
<?php
         $c="";
if(isset($_POST['submit']))
         {
           $a=$_POST['a'];
           $b=$_POST['b'];
           $ch=$_POST['choice'];
if($ch=='1')
           {
            $c=$a+$b;
echo"Addition =  $c";
           }
if($ch=='2')
           {
            $c=$a-$b;
echo"Subtraction =  $c";
           }
if($ch=='3')
           {
            $c=$a*$b;
echo"Multiplication =  $c";
           }
if($ch=='4')
           {
            $c=$a/$b;
echo "Division =  $c";
           }
         }
?>
</BODY>
</HTML>
