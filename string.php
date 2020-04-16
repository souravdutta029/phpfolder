<?php
// String function : str_split and chunk_split function.

/*$str = "priyanka ghosh";
// $array = str_split($str, 2);
$newStr = chunk_split($str, 6, "<br>");
echo $newStr;
// foreach(str_split($str) as $string){
//     echo $string;
// }

String lowercase and uppercase functions.
1. strtolower 2. strtoupper 3. lcfirst(1st character to lowercase) 4. ucfirst(1st character to uperrcase) 5. ucwords(capitalize every words)

$str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae esse, minima, in ratione necessitatibus. Iure eum quas nihil!";
$newStr = ucwords($str);
echo $newStr;

String length and count functions
1. strlen(string) 2. str_word_count(string, return) 3. substr_count(string, substring, start, length)
4. 
*/

/*$str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae esse, minima, in ratione necessitatibus. Iure eum quas nihil!";
// 1. strlen
echo (strlen($str));
echo "<br>";

// 2. str_word_count
echo (str_word_count($str));
echo "<br>";
$array = str_word_count($str, 1);
echo "<pre>";
    print_r ($array);
echo "</pre>";

echo "<br>";
$array1 = str_word_count($str, 2);
echo "<pre>";
    print_r ($array1);
echo "</pre>";
echo "<br>";

// 3. substr_count() => used to search a substring in a string
$str1 = "Lorem ipsum dolor sit, amet consectetur adipisicing sit. Molestiae esse, minima, in ratione necessitatibus. Iure sit quas nihil!";
echo substr_count($str1, "sit");
echo "<br>";
echo substr_count($str1, "sit", 1, 70);
*/

// search and find function.
$str = "India is my counrty all indians are my brothers and sisters, i love my country and i can do anything to protect its dignity and respect. Thank you.";

// strpos(), strrpos() both are case sensitive.
// stripos(), strripos() same as above but the differnece is that both are case-insensitive.

echo strpos($str, "and", 49);

// strrev()
$str1 = strrev($str);
echo $str1;



?>