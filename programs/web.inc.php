<?php
if (isset($_GET['Log-in']) && isset($_GET['Password']))
{
 $rand=rand(100,1000);
 $log=$_GET['Log-in'];
 $pass=$_GET['Password'];
 echo "WELCOME "."YOU ARE VISITOR NUMBER  ".$rand;
}
?>
<!DOCTYPE html>
<form action='web.php' method='GET'>
LOG-IN: <input type='text' name='Log-in'>
PASSWORD: <input type="password" name='Password'></input>
<input type='submit' name='Submit'>
</form>