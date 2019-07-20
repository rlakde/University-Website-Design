<?php
function sum($num1,$num2)
{
  $result=$num1+$num2;
  return $result;
}
function divide($num1,$num2)
{
  $result=$num1/$num2;
  return $result;
}
echo sum(divide(10,5),divide(20,4));

?>