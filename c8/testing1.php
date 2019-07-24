<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	testing1.php
		Purpose:Introduce counting loops (for loops)
		Input: none
		Ouput: HTML document - displays Testing... three times
-->

<html>
<head>
	<title>Testing...</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		print("<h1>This is a test</h1>");
        $numTimes = $_POST ['numTimes'];
		if (is_numeric($numTimes))
		{	
		  for ($counter = 1; $counter <= $numTimes; $counter = $counter + 1)
		  {
			 print("Testing...$counter...<br>");
		  }
        }
		else print ("<p> Bad input - use a number. </p>");
		
		print("<h1>End of test</h1>");
		
		print ("<a href=\"testing1.html\"> 
		  Return back to the testing form </a>");
		
	?>
	
</body>
</html>


