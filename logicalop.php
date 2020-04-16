<?php
    /*
        Logical operators
        1. and && --- logical and
        2. or ||  --- logical or
        3. !      --- logical not
        4. xor    --- exclusive or
    */
    
    /*$age = 17;
    if ($age >= 18 && $age <= 21){
        echo "You are eligible";
    }
    else{
        echo "SORRY!!!";
    };

    echo("<br>");

    if ($age >= 18 || $age <= 21){
        echo "You are eligible";
    }
    else{
        echo "SORRY!!!";
    };
    */

    // if else statement.
    // $num = 21;
    // if ($num % 2 == 0){
    //     echo "The number is even";
    // }else{
    //     echo "The number is odd";
    //};
    
    /*$name = "Sourav";
    $gender = "female";
    if($gender == "male"){
        echo "Hello Mr. ".$name;
    }
    else{
        echo "Hello Miss. ".$name;
    } */

    /* if elseif */
    $per = -1;
    if($per >= 80 && $per <= 100){
        echo "A Grade";
    }
    elseif($per >= 60 && $per < 80){
        echo "B Grade";
    }
    elseif($per >= 45 && $per < 60){
        echo "C Grade";
    }
    elseif($per >= 33 && $per < 45){
        echo "D Grade";
    }
    elseif($per >= 0 && $per < 33){
        echo "Fail";
    }
    else{
        echo "Please enter valid Percentage value";
    }
    
?>