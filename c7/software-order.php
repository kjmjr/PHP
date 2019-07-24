<!DOCTYPE html>
<!--Author: Kevin McAdoo
	Date:   October 23. 2017
	File:	software-order.php
	Purpose: Chapter 8 Classwork
-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>YOUR ORDER:</h1>

	<?php
		// read in input from software-order.html
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
	
		//check for invalid input if so send error message
		if ($numCopies < 1) 
		{	
		 print ( "There is an error");
		}
		// The statements to run else if to give a different output
		else 
		{	
		if ($numCopies < 5) 
		{
		 $shippingCost = 3.50;
		 $totalCost = ($shippingCost * $numCopies);
		}
		
		else if ($numCopies < 10)
		{
		 $shippingCost = 0.75;
		 $totalCost = ($shippingCost * $numCopies);
		}
		
		else if ($numCopies >= 10)
		{
		 $shippingCost = 0.85;
		 $totalCost = ($shippingCost * $numCopies);
		}
		
		
		// Display output 
		print("<table border = \"2\"><tr><td>Operating System</td><td>$os</td></tr>");
		print("<tr><td>Number of copies</td><td>$numCopies</td></tr>");
		print ("<tr><td> cost of shipping </td><td>$shippingCost</td></tr>");
		print("<tr><td>TOTAL:</td><td align=\"right\">$".number_format($totalCost, 2)."</td></tr></table>");
        }
		//return to software-order.html whether or not input was valid
		print ("<a href=\"software-order.html\"> 
		  Return to Lab Access form </a>");
		
	?>

</body>
</html>
