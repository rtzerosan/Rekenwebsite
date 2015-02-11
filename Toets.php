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

if($teller<=20)
{
	$teller=$teller+1;
	$_SESSION['teller']=$teller;
	$_SESSION['getal1']=rand(1,10);
	$_SESSION['getal2']=rand(1,10);
	$_SESSION['efficient']=rand(1,4);
	
	$getal1 = $_SESSION['getal1'];
	$getal2 = $_SESSION['getal2'];
	$efficient = $_SESSION['efficient'];

	
	echo "<form action='toetsnakijken.php' method='post'>";
	if($efficient == 1){
		$antwoord=$getal1+$getal2;
		echo"$getal1 + $getal2 = <input type='text' name='answer' /><br /> ";
	}
	elseif($efficient == 2){
		if($getal2>$getal1)
		{
		$getal3=$getal1;
		$getal1=$getal2;
		$getal2=$getal3;
		}
			$antwoord=$getal1-$getal2;
			echo"$getal1 - $getal2 =  <input type='text' name='answer' /><br />";
		
		
	}

	elseif($efficient == 3){
		$antwoord=$getal1*$getal2;
		echo"$getal1 * $getal2 =  <input type='text' name='answer' /><br />";
	}

	else{
		$getal3=$getal1*$getal2;
		
		$getal4=$getal1;
		$getal1=$getal3;
		$getal3=$getal4; 
		
		$antwoord=$getal3;
		echo"$getal1 / $getal2 = <input type='text' name='answer' /><br />";
	}
	echo count($_SESSION['results']);
	$_SESSION['antwoord']=$antwoord;
	echo "	<input type='submit' name='volgende' value='klik voor volgende vraag' />";
	echo "<input type='hidden' name='getal1' value='$getal1' />
		<input type='hidden' name='getal2' value='$getal2' />";
	echo "</form>";
	}
else
{
$reveal=0;

$results=$_SESSION['results'];
echo"<table>"; 
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
echo"</table>";
	echo" Einde van toets";

session_destroy();
}

?>