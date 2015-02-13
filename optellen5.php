<?php
SESSION_START();

if(!isset($_SESSION['results']))
{
$_SESSION['results']=array();
}


if(isset($_SESSION['teller']))
{
	$teller=$_SESSION['teller'];
}
else
{
	$teller=1;
}
if(!isset($_SESSION['punt']))
{
	$punt=10;
}
else
{
	$punt=$_SESSION['punt'];
}
if($teller<=20)
{
	$teller=$teller+1;
	$_SESSION['teller']=$teller;
	$_SESSION['getal1']=rand(1,20);
	$_SESSION['getal2']=rand(1,20);
	$_SESSION['efficient']=1;
	$_SESSION['punt']=$punt;
	
	$getal1 = $_SESSION['getal1'];
	$getal2 = $_SESSION['getal2'];
	$efficient = $_SESSION['efficient'];
	$vraagnummer=count($_SESSION['results'])+1;
	
	echo "<form action='Optellen5nakijken.php' method='post'>";
	echo "Vraag nummer $vraagnummer <br />";
	echo" <br />";

		$antwoord=$getal1+$getal2;
		echo"$getal1 + $getal2 = <input type='text' name='answer' autocomplete='off' /><br /> ";
$_SESSION['antwoord']=$antwoord;
			echo" <br />";
	echo "	<input type='submit' name='volgende' value='klik voor volgende vraag' />";
	echo "<input type='hidden' name='getal1' value='$getal1' />
		<input type='hidden' name='getal2' value='$getal2' />";
	echo "</form>";
	}
else
{
$punt=$_SESSION['punt'];
$reveal=0;
$results=$_SESSION['results'];
echo" Proficiat, je hebt een $punt gehaald";
echo"<table>"; 
echo"<tr>";
echo"<th></th>";
echo"<th>Som</th>";
echo"<th></th>";
echo"<th></th>";
echo"<th> Jouw antwoord</th>";
echo"<th> Het antwoord</th>";
echo"<th> Goed of fout?</th>";
echo"</tr> <tr>";
for($reader=1 ;$reader<=7; $reader++)
{
echo"<td>";

	foreach($results as $resultstrue)
	{
		echo $resultstrue[$reveal];
		
		echo" <br />";
	}	
	$reveal++;
	echo "</td>";
	}
echo"</tr>";
echo"</table>";
echo"<br />";
echo"<br />";
echo"<br />";
	echo" Einde van toets";
echo"<br />";
echo"<br />";
echo"<br />";

session_destroy();
}

?>
	
