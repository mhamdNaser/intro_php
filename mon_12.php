<?php
    // see session in sun_11 page ^_^
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<?php

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

    ?>
    
</body>
</html>
