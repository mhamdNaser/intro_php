<?php
echo ('<link rel="stylesheet" href="style.css">');
include ('header.php');
echo('<br><br>');
echo('<main>');


    for($i=1 ; $i<=10; $i++){
        if($i<10){
            echo $i  , "-";
        }
        else{
            echo $i ;
        }
    }
    echo ("<br>");
    echo ("<br>");
    //----------------------------------------------------
    $sum = 0;
    for($i=1 ; $i<=30; $i++){
        $sum += $i;
    }
    echo $sum  , " ";
    echo ("<br>");
    echo ("<br>");
    //----------------------------------------------------
    $n=5;
    for($i=1; $i<=$n; $i++)
    {
        for($j=$n; $j>=$i+1; $j--)
        {
            echo 'A' , ' ';
        }
        for($j=1; $j<=$i; $j++)
        {
            if($i==1){
                echo 'A' , ' ';
            }
            if($i==2){
                echo 'B' , ' ';
            }
            if($i==3){
                echo 'C' , ' ';
            }
            if($i==4){
                echo 'D' , ' ';
            }
            if($i==5){
                echo 'E' , ' ';
            }
        }
        echo '<br>';
    }
    echo '<br>';

    //-----------------------------------------------------------
    $n=5;
    for($i=1; $i<=$n; $i++)
    {
        for($j=$n; $j>=$i+1; $j--)
        {
            echo '1' , ' ';
        }
        for($j=1; $j<=$i; $j++)
        {
            if($i==1){
                echo '1' , ' ';
            }
            if($i==2){
                echo '2' , ' ';
            }
            if($i==3){
                echo '3' , ' ';
            }
            if($i==4){
                echo '4' , ' ';
            }
            if($i==5){
                echo '5' , ' ';
            }
        }
        echo '<br>';
    }
    echo '<br>';

    //-----------------------------------------------------------
    $n=5;
    for($i=1; $i<=$n; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            if($j==$i){
                echo $j , ' ';
            }
            else{
                echo '0' , ' ';
            }
        }
        for($j=$n; $j>=$i+1; $j--)
        {
            echo '0' , ' ';
        }
        echo '<br>';
    }
    echo '<br>';

    //----------------------------------------------------
    $sum = 1;
    for($i=1 ; $i<=5; $i++){
        $sum *= $i;
    }
    echo $sum  , " ";
    echo ("<br>");
    echo ("<br>");
    //----------------------------------------------------

    $x = 0;
    $y = 1;
    $sum= 0;
    for($i=0 ; $i<=8; $i++){
        echo $sum, ",";
        $sum = $x + $y;
        $y = $x;
        $x = $sum;
    }
    echo ("<br>");
    echo ("<br>");
    //----------------------------------------------------

    $text = "Orange Coding Academy";
    $c_count = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] == "c" || $text[$i] == "C") {
            $c_count++;
        }
    }

    echo "Number of c characters: $c_count";

//----------------------------------------------------

echo "<table>";
for($i=1; $i<=6; $i++){
    echo "<tr>";
    for($j=1; $j<=5; $j++){
        $multi = $i * $j;
        echo "<td>".$multi."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo ("<br>");
echo ("<br>");

//----------------------------------------------------

$a = 3;
$b = 5;
    for($i=1 ; $i<=50; $i++){
        $num = $i%$a;
        $num1 = $i%$b;
        if($num==0){
            echo  "Fizz,";
        }
        if($num1==0){
            echo  "Buzz,";
        }
        else{
            echo $i, ",";
        }
    }
    echo ("<br>");
    echo ("<br>");
    //----------------------------------------------------


    $n = 5; // number of lines
    $num = 1; // current number

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }

    echo '<br>';
    echo ("<br>");

    //----------------------------------------------------


    for ($i = 1; $i <= 5; $i++) {
        for ($j = 5; $j >= $i; $j--) {
            echo  "&nbsp;&nbsp;";
        }
        for ($j = $i; $j >= 1; $j--) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }
    for ($i = 5; $i >= 1; $i--) {
        for ($j = $i; $j <= 5; $j++) {
            echo  "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }
    
    //----------------------------------------------------

echo('</main>');