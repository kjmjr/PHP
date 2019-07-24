<!DOCTYPE>
<!--    Kevin McAdoo
        October 4, 2017
		bankData.php
		Bank Balance
-->

<html>
<head>
      <title> My Bank Balance </title>
	  <link rel="stylesheet" type="text.css" href="sample.css">
</head>

<body>

       <?php
	    /* must open your data file */
		$bankDataFile = fopen ("data.txt","r");
		
		/* we are getting the values here */
		$account1 = intval (fgets($bankDataFile));
		$account2 = intval (fgets($bankDataFile));
		$account3 = intval (fgets($bankDataFile));
		$account4 = intval (fgets($bankDataFile));
		$account5 = intval (fgets($bankDataFile));
		$account6 = intval (fgets($bankDataFile));
		$account7 = intval (fgets($bankDataFile));
		$account8 = intval (fgets($bankDataFile));
		$account9 = intval (fgets($bankDataFile));
		$account10 = intval (fgets($bankDataFile));
		
		fclose($bankDataFile);
		/* this is the math to account average */
        $accountAverage = ($account1 + $account2 + $account3 + $account4 + $account5 + $account6 + $account7 + $account8 + $account9 + $account10) /10.0;
	   
	   
	   print ("<p> This is the Bank Average $accountAverage dollars </p>");
	   
	    $bankDataFile = fopen ("data.txt","w");
		fputs ($bankDataFile, "$accountAverage/n");
		fclose($bankDataFile);
	  ?>
	  
</body>
</html>