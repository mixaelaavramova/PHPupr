<?php
/* echo "alo";
echo "<br>";

$username = "Mihaela";
$age = 20;
echo $age;
echo "<br>";

echo $username;
echo "<br>";

$bool = true;
echo $bool;
echo "<br>";

$array = [3,"text"];
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";

$assocarray = ["username" => "Mihaela", "age" => 20 ];
echo $assocarray["username"];
echo "<br>";
echo $assocarray["age"];
echo "<br>";
echo "<br>";
echo "<br>";

for($i=0;$i<2;$i++)
{
	echo $array[$i];
	echo "<br>";
}

foreach ($assocarray as $elements) {
	echo $elements;
}
*/

//upr 2 02.10.2020

$myNumber = 2;   // ne tolkova adekvatno ciklene
if ($myNumber == 2) { 
 echo "True";
} elseif ($myNumber == 1) {
 echo "Almost";
} else {
 echo "Nope";
}

echo "<br>";
echo "<br>";

$myNumber = 2;   //adekvatno ciklene
switch ($myNumber) {
	case $myNumber > 2;
		echo "Greater";
		break;
	case $myNumber == 1;
		echo "Equal";
		break;
	default:
		echo "Nope";
		break;
}

echo "<br>";
echo "<br>";

function modifyMyName ($myName) {   //obnovqvane na ime
	echo "My name is ".$myName;
	$myName = "Ivan?";
	return $myName;
}

$myNewName = modifyMyName("Mihaela");
echo "    My name is ".$myNewName;

echo "<br>";
echo "<br>";
