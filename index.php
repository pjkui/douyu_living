<?php
require_once('MyPHP.php');

echo "<h1>Hello PHP Debug!</h1>";
$a = 'A';
$b = 'B';
$c = $a . " And " . $b;

$d = 'Quinn say:'.$c;

echo $d;

echo '<br>';
$myPHP = new MyPHP();
echo $myPHP->GetName();//should output: myPHP
echo '<br>';
$myPHP->SetName('xiao ming');
echo $myPHP->GetName();//should output: xiao ming
