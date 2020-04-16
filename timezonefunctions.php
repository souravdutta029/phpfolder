<?php
	/*
	// TimeZone Functions
	date_default_timezone_set("Asia/Kolkata");
	echo date_default_timezone_get()."<br>";

	$timezone = timezone_open("Europe/Paris");
	echo timezone_name_get($timezone)."<br>";

	// location
	echo "<pre>";
	print_r(timezone_location_get($timezone));
	echo "</pre>";
	*/

	// timezone_identifiers_list returns an array
	// echo "<pre>";
	// print_r(timezone_identifiers_list());
	// echo "</pre>";

	echo "<pre>";
	//print_r(timezone_identifiers_list(1)); // 1 for Africa
	//print_r(timezone_identifiers_list(2)); // 2 for America
	print_r(timezone_identifiers_list(16)); // 16 for Asia
	
	echo "</pre>";









?>