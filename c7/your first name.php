<!DOCTYPE html>
<!--      Kevin McAdoo
          October 16, 2017
		  <your first name> .php
		  selection structures if else
-->

<html>
<head>
    <title> Your first name </title>
	<link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>
      
	  
	  <?php
	  
	     //You are pulling destination and number of nights from html
	     $destination = strtolower ($_POST ['destinationName']);
		 $numNights = ($_POST ['numNights']);
		  
		 //If you type in Rome this is the information that will display
		 print ("<h1> Deciding your destination </h1>");
	  if (strtolower ($destination) == "rome")
		{
		 //The mathmatical equation using the number of nights times the default cost to find the total cost for rome 
		 
			$costOfFlight = 1400;
			$costOfNights = 700;
			$totalCost = ($numNights * 700);
			
		 print ("<p> Your destination is rome. </p>");
		 print ("<p> The cost of your flight is 1400 dollars. </p>");
		 print ("<p> You are staying for $numNights nights. </p>");
		 print ("<p> Each night of your stay cost 700 dollars. </p>");
		 print ("<p> The total cost of your trip is $totalCost dollars. 
		        </p>"); 
		}
		 //This is the false option for if you type in a destination other than rome or tokyo
		  
		
			  
		 //If you type in Tokyo this is the information that will display	
	  else if (strtolower ($destination) == "tokyo")
	    {
	     //The mathmatical equation using the number of nights times the default cost to find the total cost for tokyo
			$costOfFlight = 1800;
			$costOfNights = 1200;
			$totalCost = ($numNights * 1200);
		 
		 print ("<p> Your destination is tokyo. </p>");
		 print ("<p> The cost of your flight is 1800 dollars. </p>");
		 print ("<p> You are staying for $numNights nights. </p>");
		 print ("<p> Each night of your stay cost 1200 dollars. </p>");
		 print ("<p> The total cost of your trip is $totalCost. 
		       </p>"); 
		}
		
	  else 
		{  
		 print ("<p> You have typed in an Invalid destination </p>");
		 print ("<p> Please try again </p>");	  
		} 
					 
		 //This key directs back to the html page  
		 print ("<a href=\"your first name.html\"> 
		  Return to your destination form </a>");
		  
	  ?>
	 
</body>
</html>