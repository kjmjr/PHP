<!DOCTYPE html>
<!--   Kevin Jaiquan McAdoo
	   August 30, 2017
	   Circle.php
	   PHP Practice
-->

<html>
<head>
	<title> Circle Calculation </title>
</head>

<body>
	<h1> Circle Calculation </h1>
	
	<?php
	    $radius = $_POST['radius'];
		$area = pow($radius, 2) * pi();
		$circum = 2* $radius * pi();
		
		print("<p> The area is $area and 
		the circumference is $circum </p>");
	    
	?>
	<p> <a href="circle.html"> Calculate another?</a></p>
	
</body>
</html>
		