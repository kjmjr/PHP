<DOCTYPE html>
<!--    Kevin McAdoo
        September 29, 2017
		Travel.php
		Chapter 5 assigment
		The travel file for php
-->

<html>
<head>

	<title>Travel to Rome</title>
	<link rel="stylesheet" type="text/css" href="sample.css">
	
</head>
 
<body>

    <!-- Travel to Rome Reservation Form has a strong tag to indicate bold -->
	<h1 font-family="helvetica" font-size="24"><strong>Travel to Rome Reservation Form</strong></h1>	

    <?php
         /*Get the variable values posted by the html file */
         $numTravelers = $_POST ['numTravelers'];
         $numNights = $_POST ['numNights'];
		 
		 /* Calculate the total airline, hotel cost per night (110.00) and total cost, ticket per traveler (875.00) */
		 $ticTraveler = 875.00;
		 $hotNight =110.00;
		 $airLineCost = $numTravelers * 875 ;
		 $hotelCost = $numTravelers * $numNights * 110 ;
		 $totalCost = $airLineCost + $hotelCost ;
		 
		 /* Display Trip results Input and Output*/
		 print ("<h1> Trip results.... </h1>");
		 print ("<p> The Number of People Traveling is $numTravelers.</p> ");
		 print ("<p> The Total Airline Cost is $airLineCost.</p> ");
		 print ("<p> The Total Hotel Cost is $hotelCost.</p> ");
		 print ("<p> The Total Cost of the Trip is $totalCost.</P> ");
	?>	 

</body>
</html>	