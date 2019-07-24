<DOCTYPE html>
<!--    Kevin McAdoo
        September 25, 2017
		rectangle.php
		first php program
-->

<html>
<head>
    <title> Rectangle Area Calculator</title>
	<link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1> This is my rectangle program <Strong> Kevin </strong> McAdoo </h1>
	
    <?php
	     /* Get the variable values that were posted by the html program */
	     $lengthOfRectangle = $_POST ['lengthOfRectangle'];
		 $widthOfRectangle = $_POST ['widthOfRectangle'];
		 
		 /* Caculate the area of the rectangle */
		 $areaOfRectangle = $lengthOfRectangle * $widthOfRectangle ;

         /* Display input and output */
         print("<p> The length of the rectangle is $lengthOfRectangle!</p> "); 
		 print("<p> The width of the rectangle is $widthOfRectangle!</p> "); 
		 print("<p> The area of the rectangle is $areaOfRectangle!</p> "); 
	
	
	?>
	
	
</body>
</html>