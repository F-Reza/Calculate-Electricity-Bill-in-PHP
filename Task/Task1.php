<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
<body><center>
<h2>Fahrenheit and Celsius Table</h2>
<?php
$fahr = -50;
$stop_fahr = 50;

print '<table border=1>';
print '<tr><th>Fahrenheit</th><th>Celsius</th></tr>';
while ($fahr <= $stop_fahr) {
    $celsius = ($fahr - 32) * 5 / 9;
    print "<tr><td>$fahr</td><td>$celsius</td></tr>";
    $fahr += 5;
}
print '</table>';
?>
</center>
</body>
</html>