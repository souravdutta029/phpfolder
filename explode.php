<?php

$str = "souravdutta123.JPEG";

$array = explode('.', $str);
$array1 = strtolower(end($array));

echo "<pre>";
	print_r($array1);
"</pre>";
?>