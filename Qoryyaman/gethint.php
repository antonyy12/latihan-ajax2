<?php

$a[] = "Anna";
$a[] = "Britanny";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			}else{
				$hint .= ", $name";
			}
		}
	}
}

echo $hint === "" ? "no suggestion" : $hint;

?>