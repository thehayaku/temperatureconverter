<html>
<head>
	<title>Temperature Converter</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<?php include './php/converting.php'; ?> 
</head>
<body>
<!-- <div class='header'>
<h1>Temperature Converter</h1>
</div> -->
<div class='content'>
<div class='grid-container'>
<div class='spacekiri'></div>
<div class='isigrid'>
<div class='judul'><p>Temperature Converter</p></div>
<form action='#' method='get'>
<table>
<tr>
<td id='pad1'>Choose the temperature</td>
<td>:</td>
<td id='pad2'>
<input type='radio' name='D' value='C'/>Celcius 
<input type='radio' name='D' value='F'/>Fahrenheit
<input type='radio' name='D' value='R'/>Reamur
<input type='radio' name='D' value='K'/>Kelvin
</td>
</tr>
<tr>
<td id='pad1'>Input the degree</td>
<td>:</td>
<td id='pad2'>
<input type='text' name='degree' id='intex'/></td>
</tr>
<tr>
<td id='pad1'>Convert to</td>
<td>:</td>
<td id='pad2'>
<input type='radio' name='C' value='C'/>Celcius 
<input type='radio' name='C' value='F'/>Fahrenheit
<input type='radio' name='C' value='R'/>Reamur
<input type='radio' name='C' value='K'/>Kelvin
</td>
</tr>
<tr>
<td></td>
<td></td>
<td id='convert'><button type='submit' value='Submit' id='btncvt'>Convert</button></td>
</tr>
<tr>
<td id='pad1'>Result</td>
<td>:</td>
<td id='pad2'>
<?php
if(isset($_GET['degree']))
output();
?>
</td>
<tr>
<td></td>
<td></td>
</table>
</form>
</div>
<div class='spacekanan'></div>
</div>
</div>
<div class='footer'>theHayaku</div>
</body>
</html>