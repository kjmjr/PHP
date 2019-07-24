<!DOCTYPE html>
<!--	Author: Kevin McAdoo
		Date:	November 20, 2017
		File:	rainfall.php
		Purpose: Gathered rain fall amounts in a displayed table
		Chapter: 11
-->

<html>
<head>
	<title> Rain Form Results </title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
      <?php
	     
		 print ("<h1>The Rain Report </h1>");
		 
		 //here we are pulling the information from the html
		 $rainAmount[0] = $_POST['rain1'];
	     $rainAmount[1] = $_POST['rain2'];
		 $rainAmount[2] = $_POST['rain3'];
		 $rainAmount[3] = $_POST['rain4'];
		 $rainAmount[4] = $_POST['rain5'];
	     $rainAmount[5] = $_POST['rain6'];
	     $rainAmount[6] = $_POST['rain7'];
	     $rainAmount[7] = $_POST['rain8'];
		 $rainAmount[8] = $_POST['rain9'];
	     $rainAmount[9] = $_POST['rain10'];
    	 $rainAmount[10] = $_POST['rain11'];
	     $rainAmount[11] = $_POST['rain12'];
		 
		 //here we are finding the average of the rain fall amounts 
		 $average = ($rainAmount[0] + $rainAmount[1] + $rainAmount[2] + $rainAmount[3] + 
		 $rainAmount[4] + $rainAmount[5] + $rainAmount[6] + $rainAmount[7] +
		 $rainAmount[8] + $rainAmount[9] + $rainAmount[10] + $rainAmount[11])/ 12;

		 
		 // were using the max command to find the maximum value out of the rain amounts
         $highRain = max ($rainAmount[0],$rainAmount[1], $rainAmount[2], $rainAmount[3], $rainAmount[4], $rainAmount[5], $rainAmount[6],
             $rainAmount[7], $rainAmount[8], $rainAmount[9], $rainAmount[10], $rainAmount[11]);
		  
		 // were using the min command to find the minimum value of the rain amounts 
		 $lowRain = min ($rainAmount[0],$rainAmount[1], $rainAmount[2], $rainAmount[3], $rainAmount[4], $rainAmount[5], $rainAmount[6],
             $rainAmount[7], $rainAmount[8], $rainAmount[9], $rainAmount[10], $rainAmount[11]);
		
         // here we are using the if and else statements to find out what type of season we have 		
			 if ($average > 10)
				 
			   print ("<h2>It was a wet season!</h2>");
			 
			 else 
				 print ("<h2>It was a dry season!</h2>");
		 
		 
		 // here we are printing out all of the results
		 print ("<table border = \5\" />");
		 print ("<tr><td>Rain 1: </td><td>$rainAmount[0]</td></tr> 
		 <tr><td>Rain 1: </td><td>$rainAmount[0]</td></tr>
		 <tr><td>Rain 2: </td><td>$rainAmount[1]</td></tr>
		 <tr><td>Rain 3: </td><td>$rainAmount[2]</td></tr>
		 <tr><td>Rain 4: </td><td>$rainAmount[3]</td></tr>
		 <tr><td>Rain 5: </td><td>$rainAmount[4]</td></tr>
		 <tr><td>Rain 6: </td><td>$rainAmount[5]</td></tr>
		 <tr><td>Rain 7: </td><td>$rainAmount[6]</td></tr>
		 <tr><td>Rain 8: </td><td>$rainAmount[7]</td></tr>
		 <tr><td>Rain 9: </td><td>$rainAmount[8]</td></tr>
		 <tr><td>Rain 10: </td><td>$rainAmount[9]</td></tr>
		 <tr><td>Rain 11: </td><td>$rainAmount[10]</td></tr>
		 <tr><td>Rain 12: </td><td>$rainAmount[11]</td></tr>");
		 print ("</table>");

		 //br means line break and number format command tells the number to stay into a whole number
		 print ("<br>");
		 print ("<table border = \5\" />"); 
	     print ("<tr><td>The average of Rainfalls: </td><td 
			         align= \"right\">" .number_format($average, 0). " </tr>");
		 print("<tr><td>The highest Rain fall is:</td><td 
			         align= \"right\">" .number_format($highRain, 0). "</tr>");
		 print("<tr><td>The lowest Rain fall is:</td><td 
			         align= \"right\">" .number_format($lowRain, 0). "</tr>");
		 print ("</table>");
		 
       ?>

</body>
</html>