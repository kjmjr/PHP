<!DOCTYPE html>
<!--		
		Date:	November 27, 2017
		File:	math-problem.php
		Purpose: Calculate the answers to the math problems typed in
		Output: Display the results to the sum, differene, product and quotient

-->
<html>
<head>
	<title> Math Form </title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> <b>Math Answers </b> </h1>
    <hr>
<?php
	// add call to include the file with the functions
	include ("inc-math-problem-functions.php");
	
	$sum1 = $_POST['sum1'];
	$sum2 = $_POST['sum2'];
	$diff3 = $_POST['diff3'];
	$diff4 = $_POST['diff4'];
	$pro5 = $_POST['pro5'];
	$pro6 = $_POST['pro6'];
	$quo7 = $_POST['quo7'];
	$quo8 = $_POST['quo8'];
	
	$result1 = sum ($sum1,$sum2);
	$result2 = difference ($diff3, $diff4);
	$result3 = product ($pro5, $pro6);
	$result4 = quotient ($quo7, $quo8);
	
	print ("<table border = \5\" />");
	print ("<tr><td> Addition problem: </td><td>$result1</td></tr>");
	print ("<tr><td> Subtraction problem: </td><td>$result2</td></tr>"); 
	print ("<tr><td> Multiplication problem: </td><td>$result3</td></tr>");
	print ("<tr><td> Division problem: </td><td>$result4</td></tr>");
	print ("</table>");
	
	print ("<P> Thanks for your submision submit another math problem! </p>");
	
	
?>

</body>
</html>

  </body>
</html>