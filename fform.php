<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CUSTOMER DETAILS</title>
</head>
<style>
    .customer{color:red;}
</style>
<body>
    <fieldset>
<?php

$namecus = $agecus = $gendercus = $productcus = "";
$name = $age = $genter = $product = "";

if ($_SERVER["$_REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"]))
 {
    $namecus = "name is required";
}
else{
    $name =$_POST["name"];
}

if (empty($_POST["age"])) 
{
    $agecus = "age is required";
}
else
{
    $age = $_POST["age"];
}
if (empty($_POST["gender"])) 
{
    $gendercus = "gender is required";
}
else {
    $gender = $_POST["gender"];
}
if (empty($_POST["product"]))
 {
    $productcus = "";
}
else
{
    $product = $_POST["product"];
}}
?>
<h1>Customer Details</h1>
<p><span class="customer">* required field</span></p>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
Name:<input type="text" name="name"/><br><br>
Age:<input type="number" name="num"/><br><br>
Gender:<input type="radio" name="one"/>male
        <input type="radio" name="one" />female
        <input type="radio" name="one" />others
        <br><br>
Product:<input type="checkbox" name="two"/>books<br/>
        <input type="checkbox" name="two"/>mobiles<br/>
        <input type="checkbox" name="two"/>sports things<br/>
    <br><br>
<input type="submit" name="submit"/>
</form>
</fieldset>
</body>
</html>