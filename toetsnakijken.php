<?php
session_start();


$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];
$answer = $_POST['answer'];

$_SESSION['answer']=$answer;

$som = $getal1 + $getal2;

array_push($_SESSION['sommen'], $som);

echo $getal1;








header("location:Toets.php");

?>