<?php
    // Array functions
    // count() and sizeof()
    // $name = ["Sanjay","Ravi","Suraj","Dhiraj"];
    // echo count($name);
    // echo "<br>"
    // echo sizeof($name);

    // $fruit = ["apple","banana","orange","pineapple","guava","grapes","mango"];
    // in_array() && array_search()
    // echo in_array("guava", $fruit);
    // if(in_array("pineapple", $fruit)){
    //     echo "Find Successfully";
    // }else{
    //     echo "Not present in the array";
    // };
    // array_unshift($fruit, "lemon");
    // array_shift($fruit);
    // echo "<pre>";
    // print_r($fruit);
    // echo "</pre>";
    // push : adds elements at the last 
    // pop : deletes an element from the last
    // array_merge and array_combine functions
    /*
    array_merge => indexed and associative arrays
    array_merge_recursive => multidimensional associative array
    array_combine => only indexed arrays.
    */

    // $a = ["apple","banana","orange","pineapple","guava"];
    // $b = ["grapes","mango"];
    
    // // Merging the arrays
    // $newarray = array_merge($a, $b);
    // echo "<pre>";
    // print_r($newarray);
    // echo "</pre>";
    
    $a = "lemon";
    $fruit = ["a" => "apple","b" =>"banana","c" =>"orange","d" =>"pineapple","e" =>"guava"];
    // echo "<pre>";
    // print_r($a);
    // echo "</pre>";
    // extract($fruit, EXTR_OVERWRITE);
    // extract($fruit, EXTR_SKIP);
    extract($fruit, EXTR_PREFIX_SAME, "test");
    extract($fruit, EXTR_PREFIX_ALL, "test");
    // extract is used to converts keys of associative arrays to variables.
    // echo "The value of a : $a <br>";
    // echo "The value of a : $test_a <br>";
    // echo "The value of b : $test_b <br>";
    // echo "The value of c : $test_c <br>";
    // echo "The value of d : $test_d<br>";
    // echo "The value of e : $test_e <br>";

    // syntax of extract(array, extract_rules, prefix)
    // types of extract rules:
    // i) EXTR_OVERWRITE ii) EXTR_SKIP iii) EXTR_PREFIX_SAME iv) EXTR_PREFIX_ALL

    // compact() function => just opposite of extract function.
    // compact(var1,var2,var3,.....) => dnt use the dollar sign
    // $firstName = "Sourav";
    // $lastName = "Dutta";
    // $age = "32";

    // $newArray = compact('firstName', 'lastName', 'age');

    // echo "<pre>";
    // print_r($newArray);
    // echo "</pre>";

    // array: range(start, end, step) function
    
    // foreach(range(0,10) as $number){
    //     echo $number. "<br>";
    // }
    // echo "<br>";
    // echo "<br>";

    // foreach(range('a','z') as $letter){
    //     echo $letter ."<br>";
    // }

    // explode and implode function
    // syntax explode(separator, string, limit)
    // syntax implode(separator, array)

    $str = "Hello Sourav. How are you";

    $newArray = explode(" ", $str);
    $newArray = explode(" ", $str, 3);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";










    
?>