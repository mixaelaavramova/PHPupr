<?php
echo "alo";
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