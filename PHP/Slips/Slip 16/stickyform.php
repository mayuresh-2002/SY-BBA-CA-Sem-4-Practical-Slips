<html>
<body>
<form method=post action="Sticky.php">
<fieldset>
<legend>Enter Strings in the text Boxes !</legend>
<p><b>First String :</b><input type=text name=s1 value="<?php if(isset($_POST['s1'])) echo $_POST['s1'];?>"></p>
<p><b>Second String :</b><input type=text name=s2 value="<?php if(isset($_POST['s2'])) echo $_POST['s2'];?>"></p>
</fieldset>
<div align=center>
<input type=submit name=submit value="Match String">
</div>
<input type="hidden" name="submit" value=true>
</form>
<?php
if(isset($_POST['submit']))
{
            $s1=$_POST['s1'];
            $s2=$_POST['s2'];
            if(strcmp($s1,$s2)==0)
            {
                        echo"<br><b>Matching</b>";
            }
            else
            {
                        echo"<br><b>Not Matching</b>";
            }
}
?>
</body>

</html>
