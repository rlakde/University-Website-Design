<?php
if (isset($_GET['Day']) && isset($_GET['Month']) && isset($_GET['Year']))
{
$day=$_GET['Day'];
$month=$_GET['Month'];
$year=$_GET['Year'];
echo $day."/".$month."/".$year;
}
?>
<form action='day.php' method='GET'>
DAY:<br><input typt='text' name='Day'><br>
MONTH:<br><input type='textarea' name='Month'><br>
YEAR:<br><input type='textarea' name='Year'><br>
<input type='submit' name='submit' value='submit'>
</form>
