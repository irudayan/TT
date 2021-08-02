<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CUSTOMER DETAILS</title>
</head>
<body>
<?php

$namecus = $agecus = $gendercus = $productcus="";
$name = $age = $genter = $product="";

if ($_SERVER["$_REQUEST_METHOD"]=="POST")
	if(empty($_POST["name"]))
 {
	$namecus="name is required";
}
else
{
	$name=$_POST["name"];
}
if (empty($_POST["age"])) 
{
	$agecus="age is required";
}
else
{
	$age=$_POST["age"];
}
if (empty($_POST["gender"])) 
{
	$gendercus="gender is required";
}
else {
	$gender=$_POST["gender"];
}
if (empty($_POST["product"]))
 {
	$productcus="product is required";
}
else
{
	$product=$_POST['product'];
}
?>
<h1>Customer Details</h1>
<form action="good.php"/>
Name:<input type="text" name="name"/><br>
Age:<input type="number" name="num"/><br>
Gender:<input type="radio" name="male"/>male
		<input type="radio" name="female"/>female
		<input type="radio" name="others"/>others
		<br>
Product:<input type="chekbox" name="books"/>books
		<input type="chekbox" name="mobiles"/>mobiles
		<input type="chekbox" name="sports things"/>sports things
</form>
</body>
</html>