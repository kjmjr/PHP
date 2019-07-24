<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>process-scores4.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/durham/tool.css" type="text/css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-scores4.php
		Purpose:Process a file containing a list of scores, each ona separate line
		Input: fileName received from process-scores4.html
		Output: A list of the scores stored in the file

-->
<html>
<head>
	<title>STUDENT SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> STUDENT SCORES </h1>

<?php
	// add call to include the file with the functions
	include ("inc-numeric-file-functions.php");

	$fileName = $_POST['fileName'];

	printData($fileName);

	$avgScore = getAverage($fileName);
	$numScores = getCount($fileName);
	print ("Number of Scores: $numScores<br>");
	print ("Average Score: $avgScore<br>");
	// add code to check for highest and lowest 
	// after you code the getLowest
	
	$myHigh = getHighest ($fileName);
    print ("<p> The highest value is: $myHigh </p>");
	$myLow = getLowest ($fileName);
	print ("<p> The lowest value is: $myLow </p>");
?>

</body>
</html>

  </body>
</html>
