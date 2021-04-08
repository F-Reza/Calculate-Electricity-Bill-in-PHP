<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP - Calculate Electricity Bill</title>
	<link rel="stylesheet" href="main.css" />
	<title></title>
</head>
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
<?php
$co_name = '';
$c_name = '';
$past_reading = '';
$present_reading = '';
$UnitConsumed = '';
$Amount = '';
 $result = '';
if (isset($_GET['data-submit'])) {
    $co_name = $_GET['co_name'];
    $c_name = $_GET['c_name'];
    $past_reading = $_GET['past_reading'];
    $present_reading = $_GET['present_reading'];
	$UnitConsumed = $present_reading - $past_reading ;
	
	$units = $UnitConsumed;
	if (empty($units)) {$UnitConsumed = '';}
    else if (!empty($units)) {
        $result = calculate_bill($units);
        $Amount = $result;
    }
}

function calculate_bill($units) {
    $unit_cost_first = 3;
    $unit_cost_second = 4;
    $unit_cost_third = 5;
    $unit_cost_fourth = 6;

    if($units <= 100) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 100 && $units <= 200) {
        $bill = $units * $unit_cost_second;
    }
	else if($units > 200 && $units <= 300) {
        $bill = $units * $unit_cost_third;
    }
    else {
        $bill = $units * $unit_cost_fourth;
    }
    return number_format((float)$bill, 2,'.', '');
}

?>

<body>
	
<center> <p>OUTPUT</p> </center>
<div id="output">
	<div class="box1">
		<h2> PHP - Calculate Electricity Bill</h2>
	</div>

	<div class="box2 tab">
		<p> Consumer Number 
		<span class="T"><?php echo $co_name; ?></span></p>
		
	</div>
	<div class="box3 tab">
		<p> Customer Name </p>
		<p class="T p1"><?php echo $c_name; ?></p>
	</div>
	<div class="box4 tab">
		<p> Previous Reading </p>
		<p class="T p2"><?php echo $past_reading; ?></p>
	</div>
	<div class="box5 tab">
		<p> Present Reading </p>
		<p class="T p3"><?php echo $present_reading; ?></p>
	</div>
	<div class="box6 tab">
		<p> Unit Consumed </p>
		<p class="T p4"><?php echo $UnitConsumed; ?></p>
	</div>
	<div class="box4 tab">
		<p> Amount </p>
		<p class="T p5"> <?php echo $Amount; ?> </p>
	</div>
	<div class="box6"> </div>
	
</div>	
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
</body>
</html>