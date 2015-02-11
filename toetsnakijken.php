<?php
session_start();


$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];
$answer = $_POST['answer'];
$results = $_SESSION['results'];
$antwoord = $_SESSION['antwoord'];
$efficient = $_SESSION['efficient'];
if($answer==$antwoord)
{
$controle='goed';
}
else
{
$controle='fout';
}

if ($efficient==1)

	{$soort='+';}
	
elseif ($efficient==2)

	{$soort='-';}
	
elseif ($efficient==3)

	{$soort='*';}
	
else

	{$soort='/';}
	
array_push($results, array($getal1, $soort, $getal2, '=', $answer, $antwoord, $controle));

$_SESSION['results']=$results;
echo $getal1;
header("location:Toets.php");

?>