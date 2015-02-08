<?php
SESSION_START()
if(isset($_SESSION['nummer']))
{
	$nummer=$_SESSION['nummer'];
}
else
{
	$nummer=0;
}
if(isset($_SESSION['punt'];
{
	$punt=$_SESSION['punt'];
}
else
{
	$punt=1;
}
if($nummer<=10)
{

}
else
{
	echo" gefeliciteerd, U hebt een $punt gehaald";
	SESSION_DESTROY()
	echo" Wilt u nog een toets maken? <a href='toets.php'>
}