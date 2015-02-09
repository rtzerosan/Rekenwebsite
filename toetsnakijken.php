<?php
session_start();


$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];
$answero = $_POST['answer'];
$answer = $_SESSION['answer'];
array_push($answer, $answero);
$_SESSION['answer']=$answer;
$som = $getal1 + $getal2;
echo $getal1;
header("location:Toets.php");

?>