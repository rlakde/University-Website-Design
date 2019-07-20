<?php
session_start();
if (isset($_session['name']) and (isset($_session['age'])))
{
echo "You are welcome";
}
else
echo "Please log in"


?>