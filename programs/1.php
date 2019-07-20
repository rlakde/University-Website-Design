<?php
   if (isset($_POST['user_input']) && !empty($_POST['user_input']))
    {
    $user_input = $_POST['user_input'];
    echo $user_input;
    }
?>
<hr>
<form action='1.php' method='POST'>
 <textarea name='user_input' rows=6 cols=30>
 </textarea>
 <input type='Submit' value='submit'>
</form>