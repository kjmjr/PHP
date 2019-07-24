<!DOCTYPE html>
<!--	Author: Martha Sheard Farley
		Date:	November 13, 2017
		File:	arrays-blank-process.php
		Purpose:Demonstrate the use of a FOR loop to process an array
		with input inside the php code. 
		Chapter: 11
-->
<html>
<head>
	<title>SCORES REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$scores = array(80, 55, 75, 97, 88, 82, 59, 60, 96, 78);

		$sum = 0;
		$numPassingScores = 0;
	
		print("<h1>SCORES REPORT arrays-blank-process</h1>");
		print("<table border = \"1\">");
		/* THis is the code to process each 
		array entry to print it, to add it up and to check and see
		if it is passing, if so increment the passing scores count.
		*/
		/* let's code the for loop to process the array 
		*/
		
		for ($count = 0; $count < sizeof($scores); $count = $count + 1)		
		{
			$scoreNum = $count + 1;
			print ("<p> Score Number $scoreNum $scores[$count]</p>"); 
			
			$sum = $sum + $scores[$count];
			if ($scores[$count] >=60 )
				$numPassingScores++;
		}
	    print("</table>");
		
		$numFailingScores = sizeof($scores) - $numPassingScores;

		$average = $sum / sizeof($scores);

		print ("<p>AVERAGE SCORE: $average <br>");
		print ("NUMBER OF PASSING SCORES: $numPassingScores <br>");
		print ("NUMBER OF FAILING SCORES: $numFailingScores </p>");
	?>
</body>
</html>

