<!DOCTYPE html>
<!--	Author: Susan Nagy
		Date:	10/5/14
		File:	busTravel.php
		Purpose: Chapter 8 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];
		//The first prompt is not a dropdown menu like the rest, so it gets its own if/elseif set up. I used the empty() function first incase there's a missing input, and to have it, because the calculation will be used anyway to display gas reumbursement. The dropdowns are basically a pattern of the same if/else style, if all the variables are YES, the amount from the book get displayed or else they are $0. In the end, the $total is calculated by adding up all the variables. The gas use and total's functions needed to get adjusted because they weren't displaying proper placements of decimals so i used the number_format(). 
		if (empty($miles))
			print("<h1>Error! Input missing!</h1>");
		else {
			$carUse = $miles * 0.35;
		}

		
		if ($breakfast == YES) 
			$breakfastAllowance = "6.00";
		
		 elseif ($breakfastAllowence == NO) {
		 	$breakfastAllowance = "0.00";
		}
		if ($lunch == YES) 
			$lunchAllowance = "8.50";
		
		elseif ($lunchAllowence == NO) {
		 	$lunchAllowance = "0.00";
		 }
		 if ($dinner == YES) 
			$dinnerAllowance = "17.50";
		
		 elseif ($dinnerAllowence == NO) {
		 	$dinnerAllowance = "0.00";
		 }

		 if ($hotel == YES) 
			$hotelAllowance = "110.00";
		
		 elseif ($hotelAllowence == NO) { 
		 	$hotelAllowance = "0.00";
		 }
		 $total = $carUse + $breakfastAllowance + $lunchAllowance + $dinnerAllowance + $hotelAllowance;
		
		
				
			
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT FORM</h1>");
		print ("<table><tr><td>CAR USE:</td><td>$".number_format($carUse, 2)."</td</tr>
			<tr><td>BREAKFAST ALLOWANCE:</td><td>$$breakfastAllowance</td</tr>
			<tr><td>LUNCH ALLOWANCE:</td><td>$$lunchAllowance</td</tr>
			<tr><td>DINNER ALLOWANCE:</td><td>$$dinnerAllowance</td</tr>
			<tr><td>HOTEL ALLOWANCE:</td><td>$$hotelAllowance</td</tr>
			<tr><td><strong>TOTAL REIMBURSEMENT:</strong></td><td><strong>$".number_format($total, 2)."</strong></td</tr></table>");
	?>

</body>
</html>