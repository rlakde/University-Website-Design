<?php
 $rand=rand(1,6);
 if (isset($_POST['button']))
 { echo "You entered:"; 
   echo "<br>";
   echo $rand;
 }
?>
<form action="randomdice.php" method="POST">
 <input type='submit' name='button' value='roll'>
</form>