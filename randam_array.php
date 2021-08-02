<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Random array</title>
</head>
<body>
<?php
$a= array("red","green","blue","yellow","brown","black");
$random_keys=array_rand($a);
echo $random_keys;exit;
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]]."<br>";
echo $a[$random_keys[3]]."<br>";
echo $a[$random_keys[4]]."<br>";
?>

</body>
</html>