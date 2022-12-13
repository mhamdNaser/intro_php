<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');
    echo('<br><br>');

    // see session in sun_11 page ^_^
    session_start();

    echo('<main>');
    echo ('<a href="./session.php">SESSION PAGE</a>');
    echo('<br><br>');

    $name1 = "muhammed";
    $mail = "mhamd.naser.edden@gmail.com";
    $_SESSION['name1']= $name1;
    $_SESSION['mail']= $mail;
    echo '<table>';
    echo "<tr><td>".$name1."</td><td>".$mail."</td></tr>";
    echo "<tr><td>".$name1."</td><td>".$mail."</td></tr>";
    echo "<tr><td>".$name1."</td><td>".$mail."</td></tr>";
    echo "</table>";


    $information = date("F d Y H:i:s.", filemtime("login.php"));
    echo "Last time of file change: ", $information ;
    $_SESSION['information'] = $information;
    
    echo('<br><br>');

    $filePath = "text.txt";
    $lines = count(file($filePath));
    echo ('number of file line :  ');
    $_SESSION['line']= $lines;
    echo $lines;
    echo('</main>');
    ?>
    
</body>
</html>
