<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');
    echo('<br><br>');
    
    session_start();

    echo('<main>');
    echo  $_SESSION['name1'], "<br><br>" , $_SESSION['mail'] ,"<br><br>" , $_SESSION['information'],"<br><br>" , $_SESSION['line'] ;
    echo('</main>');