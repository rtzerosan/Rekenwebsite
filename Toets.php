<?php
SESSION_START();
if(!isset($_SESSION['answer']))
{
$_SESSION['answer']=array();
}

if(isset($_SESSION['teller']))
{
	$teller=$_SESSION['teller'];
}
else
{
	$teller=1;
}

if($teller<=5)
{
	$teller=$teller+1;
	$_SESSION['teller']=$teller;
	$_SESSION['getal1']=rand(1,10);
	$_SESSION['getal2']=rand(1,10);

	$getal1 = $_SESSION['getal1'];
	$getal2 = $_SESSION['getal2'];


	$_SESSION['efficient']=rand(1,4);

	$efficient = $_SESSION['efficient'];
	echo "<form action='toetsnakijken.php' method='post'>";
	if($efficient == 1){
		$antwoord=$getal1+$getal2;
		echo"$getal1 + $getal2 = <input type='text' name='answer' /><br /> ";
	}
	elseif($efficient == 2){
		if($getal1>$getal2)
		{
			$antwoord=$getal1-$getal2;
			echo"$getal1 - $getal2 =  <input type='text' name='answer' /><br />";
		}
		else
		{
			$antwoord=$getal2-$getal1;
			echo"$getal2 - $getal1 =  <input type='text' name='answer' /><br />";
		}
		
	}

	elseif($efficient == 3){
		$antwoord=$getal1*$getal2;
		echo"$getal1 * $getal2 =  <input type='text' name='answer' /><br />";
	}

	else{
		$getal3=$getal1*$getal2;
		$antwoord=$getal2;
		echo"$getal3 / $getal1 = <input type='text' name='answer' /><br />";
	}
	$efficient = $_SESSION['efficient'];
	echo "	<input type='submit' name='volgende' value='klik voor volgende vraag' />";
	echo "<input type='hidden' name='getal1' value='$getal1' />
		<input type='hidden' name='getal2' value='$getal2' />";
	echo "</form>";
	}
else
{
	$results=$_SESSION['answer'];

	foreach($results as $resultstrue)
	{
		echo" $resultstrue<br />";
	}
	
	session_destroy();
	
	echo" Einde van toets";


}

?>