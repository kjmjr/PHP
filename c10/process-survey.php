<!DOCTYPE html>
<!--	Author: Mike O'Kane & Martha Sheard Farley
	Date:	November 5, 2017
	File:	process-survey.php
	Purpose: Process a file containing smoking Survey data
	Inputs: Name of file containing the survey data (received from process-survey.html)
	Ouptuts: Number of surveys collected
			Number and percentage of survey takers who have never smoked
			Number and percentage of survey takers who have smoked
			Number of survey takers who are heavy smokers (smoke 20 or more
			cigarettes a day for at least 5 years)
			Average number of cigarettes smoked daily by survey takers who smoke
			Average number of years that survey takers who smoke have smoked
-->

<html>
<head>
	<title>SMOKING SURVEY REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		// get file name from user
		$fileName = $_POST['fileName'];	
		
		// eventually we will tally all these variables
		// so lets initialize them
		$countHeavySmokers = 0;
		$countSmokers = 0;
		$countNonSmokers = 0;
		$totalSmokedDaily = 0;
		$totalYearsSmoked = 0;

		$surveyFile = fopen("$fileName", "r");	// open the scores file
// enter code to read from file 
// and operate as long as there are records
// in the file

         $nextSurvey = fgets ($surveyFile); //next record from file
         while ( !feof( $surveyFile))
		{		
		    // print ("<p>  $nextSurvey  </p>");
			 
			 list ($firstName, $lastName, $yearsSmoked, $smokedDaily) =
			       explode (":",$nextSurvey);
			 print ("<p>  $firstName $lastName 
			      and Years = $yearsSmoked and Daily = $smokedDaily </p>");
			 
			if ($smokedDaily == 0) 
			{
				$countNonSmokers = $countNonSmokers + 1;
				// or use $countNonSmokers ++;
		    }
		   		   
			else 
			{ //smokers
		        $countSmokers++; //fancy way to increase count	
              //calculate smokers stats
			    $totalSmokedDaily = $totalSmokedDaily + $smokedDaily;
			    $totalYearsSmoked = $totalYearsSmoked + $yearsSmoked;
			  			  
			  //count heavy smokers	  			  
                if ($smokedDaily >=20 and $yearsSmoked >=5)
                {
					$countHeavySmokers++;
                }					
			}		
			 //read the next record
			 $nextSurvey = fgets ($surveyFile);
        }
		fclose ($surveyFile);
		
		// perform all the calculations on the data. 
		$totalSurveys = $countSmokers + $countNonSmokers;
		$percentNonSmokers = 100 * $countNonSmokers / $totalSurveys;
		$percentSmokers = 100 * $countSmokers / $totalSurveys;
		$avgSmokedDaily = $totalSmokedDaily / $countSmokers;
		$avgYearsSmoked = $totalYearsSmoked / $countSmokers;

		print ("<h1>SMOKING ***SURVEY REPORT***</h1>");
		print ("<hr>");		
		print("<p>(Report generated from data file: 
							<strong>$fileName</strong>)</p>");
		print ("<table>");
		print ("Total number of people surveyed: $totalSurveys<br>");
		print ("Number of smokers:$countSmokers<br>");
		print ("Number of non-smokers:$countNonSmokers<br>");
		print ("Percentage of smokers:$percentSmokers <br>");
		print ("Percentage of non-smokers:$percentNonSmokers <br>");
		print ("Heavy smokers (20+ a day for at least 5 years):$countHeavySmokers<br>");
		print ("Average cigarettes smoked daily by smokers:$avgSmokedDaily</td></tr><br>"); 
		print ("Average years that smokers have smoked:$avgYearsSmoked</td></tr><br>");
		print ("</table>");
		
	?>
</body>
</html>

  </body>
</html>
