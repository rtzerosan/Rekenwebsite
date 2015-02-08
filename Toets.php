<?php
SESSION_START();
$_SESSION['sommen']=array();

$_SESSION['getal1']=rand(0,10);
$_SESSION['getal2']=rand(0,10);

$getal1 = $_SESSION['getal1'];
$getal2 = $_SESSION['getal2'];


$_SESSION['efficient']=rand(1,4);

$efficient = $_SESSION['efficient'];

if($efficient == 1){
$antwoord=$getal1+$getal2;
echo"$getal1 + $getal2 = ";
}

$efficient = $_SESSION['efficient'];

echo "<form action='toetsnakijken.php' method='post'>";
echo "	<input type='submit' name='volgende' value='klik voor volgende vraag' />";
echo "<input type='hidden' name='getal1' value='$getal1' />
	<input type='hidden' name='getal2' value='$getal2' />";
echo "</form>";

foreach($_SESSION['sommen'] as $desom){
	echo $desom;
}

?>