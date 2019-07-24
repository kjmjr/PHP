<!DOCTYPE html>
<!--	Author: Kevin McAdoo
		Date: OCTOBER 23. 2017
		File:	biz-travel.php
		Purpose: Chapter 8 class homework
		biz-travel.php for nested and/or selection structure IF ELSE
-->

<html>
<head>
	<title>Business Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
        <h1> Full description of Expense Report </h1>
     <?php
	      // In this section your pulling your info from html
		 $name = $_POST ['name'];
		 $miles = $_POST ['miles'];
		 $bFast = $_POST ['bFast'];
		 $lunch = $_POST ['lunch'];
		 $dinner = $_POST ['dinner'];
		 $hotel = $_POST ['hotel'];
		 
		 /* Error displays if user puts in miles over 3000 
		 and user can should click back to html*/
		  if ($miles > 3000)
		  {
		     print ("There is an error");
			 print ("<a href=\"biz-travel.html\"> 
		  Return to the business travel form </a>");			 
		  }
		 /*A list of other options displayed for else if 
		 statement all grabbing responses from html 
		 of miles and expenses */
          
        else
	    {			 
		     if ($miles < 3000 AND $miles >= 10)
		
	             $ratePerMile = 0.35;
			     $totalGasCost = ($miles * 0.35);
				 
	     	 if ($miles < 10 AND $miles < 3000) 
			
				 $totalGasCost = ($miles);
		  		 
		     if ($bFast == "yes") 
			     $bFast = 8.50;		 
						 		
		     if ($lunch == "yes")
			     $lunch = 12.50;
			 
		     if ($dinner == "yes")
			     $dinner = 18.50;
			 
		     if ($hotel == "yes")
			     $hotel = 110.00;
			 
		 $totalR = ($totalGasCost + 8.50 + 12.50 + 18.50 + 110.00);
		 // A table for your data so that it is not jumbled up
		     print("<table border = \"2\"><tr><td>Full name:
		       </td><td>$name</td></tr>");
		     print("<tr><td>Miles you have traveled:</td><td>
		      $miles</td></tr></table>");
		     print ("<strong>Expenses</strong>");
		     print ("<table border = \"2\"><tr><td>Breakfast:
		        </td><td>8.50</td></tr>");
		     print ("<tr><td>Lunch:</td><td>12.50</td></tr>");
		     print ("<tr><td>Dinner:</td><td>18.50</td></tr>");
		     print ("<tr><td>Hotel:</td><td>110.00</td></tr>");
		     print("<tr><td>Total Reimbursements:</td><td align=\"right\">$"
		       .number_format($totalR, 2)."</td></tr></table>");    
	    }	   
	 ?>
	 
</body>
</html>