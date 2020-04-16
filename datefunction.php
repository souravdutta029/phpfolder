<?php
    /*DATE & TIME FUNCTIONS in PHP.
      syntax = date(format);
      date : "d" , "j", "s"
      month: "F", "s", "M", "m", "n" 
      year : "Y", "y";
      week : "D", "l", "N", "w"
    */

    /*echo "Today is : " . date("d") . "<br><br>";
    echo "Today is : " . date("j") . "<br><br>";
    echo "Today is : " . date("jS") . "<br><br>";

    echo "Month is : " . date("F") . "<br><br>";
    echo "Month is : " . date("m") . "<br><br>";
    echo "Month is : " . date("n") . "<br><br>";
    echo "Month is : " . date("M") . "<br><br>";

    echo "Year is : " . date("Y") . "<br><br>";
    echo "Year is : " . date("y") . "<br><br>";

    echo "Full date is : " . date("d/m/Y") . "<br><br>";
    echo "Full date is : " . date("d-m-Y") . "<br><br>";
    echo "Full date is : " . date("d.m.Y") . "<br><br>";
    echo "Full date is : " . date("Y/m/d") . "<br><br>";
    echo "Full date is : " . date("Y/M/d") . "<br><br>";
    echo "Full date is : " . date("d/F/Y") . "<br><br>";
    

    echo "Week day is : " . date("D") . "<br><br>";
    echo "Week day is : " . date("l") . "<br><br>";
    echo "Week day is : " . date("N") . "<br><br>";
    echo "Week day is : " . date("w") . "<br><br>";

    // Day of the year
    echo "Day of the year : " . date("z") . "<br><br>";

    // Which week of the year
    echo "Week of the yaer : " . date("W") . "<br><br>";

    echo "Number of days in the present month : " . date("t") . "<br><br>";

    // Leap year or not
    echo "Leap year or not : " . date("L") . "<br><br>";
    $leap = date('L');
    if ($leap==1){
        echo "Leap year";
    }
    else{
        echo "Not a leap year";
    };
    */

    /*
    time also be represented by using the date() as well
    Hours: h , H, g, G
    Minutes: i
    Seconds: s
    meridium: a => am/pm or A => AM/PM
    
    
    
    // echo "Hour is : ". date("H"). "<br>";
    // echo "Hour is : ". date("g"). "<br>";
    // echo "Hour is : ". date("G"). "<br>";
    date_default_timezone_set("Asia/Kolkata");
    echo "Hour is : ". date("h"). "<br>";
    echo "Minute is : ". date("i"). "<br>";
    echo "seconds is : ". date("s"). "<br>";
    echo "Meridium is : ". date("a"). "<br>";
    echo "Time is : ". date("h:i:s a"). "<br>";
    echo "Date & Time is : ". date("d/m/Y  h:i:s a e"). "<br><br><br>";

    date_default_timezone_set("America/Los_Angeles");
    echo "Hour is : ". date("h"). "<br>";
    echo "Minute is : ". date("i"). "<br>";
    echo "seconds is : ". date("s"). "<br>";
    echo "Meridium is : ". date("a"). "<br>";
    echo "Time is : ". date("h:i:s a"). "<br>";
    echo "Date & Time is : ". date("d/m/Y  h:i:s a e"). "<br>";
    */

    /*
     date_create() and date_format() functions
     date_create(time, timezone) => it will return an object which can be seen by using date_format()
     date_format(object, format)
    
    $date = date_create("2021-03-15");
    echo date_format($date, "l"). "<br><br>";
    echo date_format($date, "d/m/Y H:m:s"). "<br><br>";
    

    echo "<pre>";
    print_r (date_parse("2020-02-12"));
    echo "</pre>";
    
    date_default_timezone_set("Asia/Kolkata");
    echo strtotime("now")."<br>";
    echo date("d-m-Y h:i:s a", strtotime("now"));
    echo "<br>";
    // echo date("d-m-Y h:i:s a", strtotime("28 feb 2021"));
    echo date("d-m-Y h:i:s a", strtotime("+5 hours"));
    echo "<br>";
    echo date("d-m-Y h:i:s a", strtotime("next monday"));
    */
    $date = date_create("2020-01-31");
    date_time_set($date, 13,20);
    echo date_format($date, "d-m-Y h:i");


?>