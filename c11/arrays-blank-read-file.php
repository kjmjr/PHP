<!DOCTYPE html>
<!--	Author: Martha Sheard Farley
		Date:	November 13, 2017
		File:	arrays-blank-read-file.php
		Purpose:Demonstrate the use of a FOR loop to process an array
			and reads the data from a file until eof. 
		Chapter: 11
-->
<html>
<head>
	<title>SCORES REPORT arrays-blank-read-file</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		/* this i the code which will read from a file
		 called scores1.txt
		and input the values into the 
		array called scores. 
		*/
		$i = 0; //counter
		$scoreFile = fopen ("scores1.txt", "r");
		$nextScore = fgets ($scoreFile);
		
		while ( !feof($scoreFile))
		{
			$scores[$i] = $nextScore ;
			$nextScore = fgets ($scoreFile);
			$i = $i + 1;
			//or you can use $i++;		
		}
		
	// now on to the code from arrays-learning.php
	
		$sum = 0;
		$numPassingScores = 0;
	
		print("<h1>SCORES REPORT arrays-read-file-soln</h1>");
		print("<table border = \"1\">");
		for($i = 0; $i < sizeof($scores); $i = $i + 1)
		{
			$scoreNum = $i + 1;
			print ("<tr><td>SCORE $scoreNum</td><td>$scores[$i]</td></tr>");
			
			$sum = $sum + $scores[$i];

			if ($scores[$i] >= 60)`*`
				$numPassingScores = $numPassingScores + 1;			
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

