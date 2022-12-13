<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');
    echo('<br><br>');
    echo('<main>');

    echo (int)10.5 +(int)10.5;
    echo('<br><br>');


    // take nine
    echo ('<a href="./w3.php">W3School</a>');
    echo('<br><br>');

    // task eghite
    $text = "Muhammed";
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
    echo $text;
    echo('<br><br>');

    // task seven
    $str = "https://www.w3schools.com/php/default.asp.";
    print_r (explode('/',$str));
    echo('<br><br>');

    // task six
    echo('director name : ');
    echo basename(dirname(__FILE__));
    echo('<br><br>');

    // task five
    echo('my ip address : ');
    $localIP = getHostByName(getHostName()); 
    echo $localIP;
    echo('<br><br>');

    // task four
    include ('login.php');

    // task three
    echo ('hello world');
    echo('</main>');

    // task tow
    phpversion();
    
    // task one
    phpinfo();