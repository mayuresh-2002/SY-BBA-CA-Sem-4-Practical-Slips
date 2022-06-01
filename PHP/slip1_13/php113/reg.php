<html>
<body>
<form method ="post" action="next.php">

<!--<form method ="post" action="reg.php">-->
<b>Student No:- </b><input type="text" name="sno" value="<?php if(isset($_POST['sno']))echo $_POST['sno'];?>"<br>
<b>StudentName:- </b><input type="text" name="sname" value="<?php if(isset($_POST['sname']))echo $_POST['sname'];?>"<br>
<b>Student city:- </b><input type="text" name="city" value="<?php if(isset($_POST['city']))echo $_POST['city'];?>"<br>

<input type="submit" name="submit" value="save">
<input type="hidden" name="submit" value="true">

</form>
</body>
</html>