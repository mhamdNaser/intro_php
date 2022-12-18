<?php
echo ('<link rel="stylesheet" href="style.css">');
include ('header.php');
echo('<br><br>');
echo('<main>');

    echo("<h1>LOOP</h1>");
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
    echo "<br>";
    echo "<br>";
    
    //----------------------------------------------------

    echo("<h1>FUNCTION</h1>");
    function is_prime($num) {
        // 0 and 1 are not prime
        if ($num < 2) {
            return false;
        }
    
        // 2 is the only even prime number
        if ($num == 2) {
            return true;
        }
    
        // all even numbers are not prime
        if ($num % 2 == 0) {
            return false;
        }
    
        // check odd numbers for primality
        for ($i = 3; $i <= sqrt($num); $i += 2) {
            if ($num % $i == 0) {
                return false;
            }
        }
    
        return true;
    }
    
    // test the function
    $num = 3;
    if (is_prime($num)) {
        echo "$num is a prime number";
    } else {
        echo "$num is not a prime number";
    }
    echo "<br>";
    echo "<br>";
    
    //----------------------------------------------------

    function reverseString($string) {
        return strrev($string);
      }

    $string = "remove";
    $reversedString = reverseString($string);
    echo $reversedString; // Outputs "!dlroW ,olleH"
    
    echo "<br>";
    echo "<br>";
    
    //----------------------------------------------------
    $string = "remove";

    // Check if all the characters in the string are lower case
    if (ctype_lower($string)) {
        echo "Your String is Ok.";
    } else {
        echo ".";
    }

    echo "<br>";
    echo "<br>";
    
    //----------------------------------------------------

    $x = 10;
    $y = 12;

    function swap($a, $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    swap($x, $y);

    echo "x = ",$x;  
    echo "y = ",$y;  

    echo "<br>";
    echo "<br>";
    
    //----------------------------------------------------

    function isArmstrongNumber($num) {
        // Get the number of digits in the number
        $num_digits = strlen((string)$num);
        
        // Initialize a variable to store the sum of the digits raised to the power of the number of digits
        $sum = 0;
        
        // Split the number into individual digits
        $digits = str_split((string)$num);
        
        // Iterate over each digit and add to the sum
        foreach ($digits as $digit) {
          $sum += pow((int)$digit, $num_digits);
        }
        
        // Return whether the sum is equal to the original number
        return $sum == $num;
      }

      $x = 407;
      if (isArmstrongNumber($x)) {
        echo $x ," is Armstrong Number.";
      } else {
        echo $x ," is not Armstrong Number.";
      }

      echo "<br>";
      echo "<br>";
    
    //----------------------------------------------------


      function isPalindrome($string) {
        // Remove all non-alphanumeric characters and convert to lowercase
        $string = preg_replace('/[^A-Za-z0-9]/', '', strtolower($string));
      
        // Check if the string is a palindrome
        if ($string == strrev($string)) {
          return "Yes it is a palindrome";
        } else {
          return "No it is not a palindrome";
        }
      }
      
      // Example usage
      $input = "Eva, can I see bees in a cave?";
      echo isPalindrome($input); // Outputs "Yes it is a palindrome"
      
      echo "<br>";
      echo "<br>";
    
    //----------------------------------------------------

      function removeDuplicates($arr) {
        return array_unique($arr);
      }

      $array1 = array(2,4,7,4,8,4);
    $uniqueArray = removeDuplicates($array1);

    echo("<pre>");
    print_r($uniqueArray); 
    echo("</pre>");

    echo "<br>";
    echo "<br>";
  
  //----------------------------------------------------

    echo("<h1>LOGIC OPERATOR</h1>");
    $year = 2013;

    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo "$year is a leap year";
            } else {
                echo "$year is not a leap year";
            }
        } else {
            echo "$year is a leap year";
        }
    } else {
        echo "$year is not a leap year";
    }

    echo "<br>";
    echo "<br>";
  //----------------------------------------------------

    $temperature = 27;

    if ($temperature < 20) {
        echo "It's wintertime!";
    } else {
        echo "It's summertime!";
    }

    echo "<br>";
    echo "<br>";
  //----------------------------------------------------

    function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($firstInteger == $secondInteger) {
        $sum = $sum * 3;
    }
    return $sum;
    }

    $firstInteger = 2;
    $secondInteger = 2;

    $result = calculateSum($firstInteger, $secondInteger);

    echo "($firstInteger + $secondInteger)";
    if ($firstInteger == $secondInteger) {
    echo " * 3";
    }
    echo " = $result";

    echo "<br>";
    echo "<br>";
  //----------------------------------------------------


    function checkSum($firstInteger, $secondInteger) {
        if ($firstInteger + $secondInteger == 30) {
            return $firstInteger + $secondInteger;
          } else {
            return false;
          }
      }
      
      $input = [
        'firstInteger' => 10,
        'secondInteger' => 10
      ];
      
    echo checkSum($input['firstInteger'], $input['secondInteger']);

    echo "<br>";
    echo "<br>";
  //----------------------------------------------------

    $number = 20;
    
    if ($number % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br>";
    echo "<br>";
  //----------------------------------------------------


    $number = 50;

    if ($number >= 20 && $number <= 50) {
        
        echo 'true';
    } else {
        
        echo 'false';
    }


    echo "<br>";
    echo "<br>";
  //----------------------------------------------------

    $numbers = [1, 5, 9];

    $largest = $numbers[0];

    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $largest) {
            $largest = $numbers[$i];
        }
    }

    echo $largest;



  
  



        
    
    
    
    

        

echo('</main>');