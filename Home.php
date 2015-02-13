<html>
<head>
<title>Sjonnie</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="rekenwebsite.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
<img src="images/logo.png" />
	 <div class="button menuitem">
	<a href="home.php?pagina=1"> Home</a>
	 </div>
	  <div class="button menuitem">
	<a href="home.php?pagina=2"> groep 4</a>
	 </div>
	  <div class="button menuitem">
	<a href="home.php?pagina=3"> groep 5</a>
	 </div>
	 <div class="button menuitem">
	<a href="home.php?pagina=4"> groep 6</a>
	 </div>

	 </div>


	 <div id="inhoud">
			<?php
                   If(isset($_GET["pagina"]))
                   {
                   $keuze = $_GET["pagina"];
                   }
                   Else
                   {
                   $keuze = 1;
                   }
					If($keuze==1) { require("homepage.php"); }
                    If($keuze==2) { require("groep4.php"); }
					If($keuze==3) { require("groep5.php"); }
					If($keuze==4) { require("groep6.php"); }
					If($keuze==5) { require("toets.php"); }
					If($keuze==6) { require("uitleg1.php"); }
					If($keuze==7) { require("uitleg2.php"); }
					If($keuze==8) { require("uitleg3.php"); }
					If($keuze==9) { require("uitleg4.php"); }
					If($keuze==10) { require("toets.php"); }	
			?>
		</div>
</body>
</html>