<?php
		function printData ($fileName)
		{
			$dataFile =fopen("$fileName","r");
			$nextValue = fgets($dataFile);
			while (! feof($dataFile) )
			{
				print("$nextValue<br>");
				$nextValue = fgets($dataFile);
			}
			fclose($dataFile);
		}

		function getTotal ($fileName)
		{
			$total = 0;
			$dataFile =fopen("$fileName","r");
			$nextValue = fgets($dataFile);
			while (! feof($dataFile) )
			{
				$total = $total + intval($nextValue);
				$nextValue = fgets($dataFile);
			}
			fclose($dataFile);
			return $total;
		}

		function getCount ($fileName)
		{
			$count = 0;
			$dataFile =fopen("$fileName","r");
			$nextValue = fgets($dataFile);
			while (! feof($dataFile) )
			{
				$count = $count + 1;
				$nextValue = fgets($dataFile);
			}
			fclose($dataFile);
			if ($count > 0)
				return $count;
			else
				return -1;
		}

		function getAverage ($fileName)
		{
			$count = getCount($fileName);
			$total = getTotal($fileName);
			if ($count > 0)
				return $total / $count;
			else
				return -1;
		}

		function getHighest ($fileName)
		{
			$dataFile =fopen("$fileName","r");
			$nextValue = fgets($dataFile);
			$highest = $nextValue;
			while (!feof($dataFile) )
			{
				if ($nextValue > $highest)
					$highest = $nextValue;
				$nextValue = fgets($dataFile);
			}
			fclose($dataFile);
			return $highest;
		}

	// here is where we will write the 
	// code for a get lowest function in class
	     function getLowest ($fileName)
	    {
		     $dataFileLink = fopen ("$fileName","r");
		     $nextScore = fgets ($dataFileLink);
		     $minScore = $nextScore; 
		// while still more data, check the values
		     while (!feof ($dataFileLink))
		    {
			//test for new minimum 
			if ($nextScore < $minScore)
				$minScore =  $nextScore;
			    $nextScore = fgets ($dataFileLink);
		    } //end while
		    fclose ($dataFileLink);
		    return $minScore;
	} // end function
	
?>