<html>
<head>
<title>Talbe</title>
<link rel="stylesheet" href='pracs.css'>
</head>
<body>
<h2> This is a table</h2>
<?php
	$i=0;
	echo "<table border=1 id=exptable><tr><th colspan=3>NUMBERS FROM 0 TO 10 WITH THEIR SQUARES AND CUBES</th></tr>";
	echo "<tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
	for($i=0;$i<=10;$i++)
	{
		echo "<tr><td>".$i."</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
	}
	echo "</table></body></html>";
?>