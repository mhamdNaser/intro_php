<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');

    echo('<main>');



  function dump($data) {
      echo "<pre>";
      var_dump($data);
      echo "</pre>";
  }

  $array = array(1, 2, 3);
  dump($array);

  echo "<br>";
  echo "<br>";

  //------------------------------------------------------

  function greet($name, $callback) {
      echo "Hello, $name!";
      $callback();
    }
  
    function sayGoodbye() {
      echo "Goodbye!";
    }
  
    greet("John", "sayGoodbye");
    echo("<br>");
    echo("<br>");
     //------------------------------------------

    class MyClass {
        public function __construct() {
        echo 'MyClass class has initialized!';
        }
    }

    $myClass = new MyClass();
    echo("<br>");
    echo("<br>");

    //------------------------------------------

    class Introducer {
        public function introduce($name) {
          echo "Hello All, I am $name";
        }
      }
      
      $intro = new Introducer();
      $intro->introduce("Scott");

      echo("<br>");
      echo("<br>");
    //------------------------------------------
    class Factorial {
        public static function calculate($n) {
          if ($n < 0) {
            throw new Exception('Factorial is not defined for negative numbers');
          }
          if ($n == 0) {
            return 1;
          }
          return $n * self::calculate($n - 1);
        }
      }
      // Example usage
      echo Factorial::calculate(5); // Outputs 120
      echo("<br>");

      class ArraySorter {
        public static function sort($array) {
          sort($array);
          return $array;
        }
      }
      
      // Example usage
      $array = [11, -2, 4, 35, 0, 8, -9];
      $sortedArray = ArraySorter::sort($array);
      print_r($sortedArray);
      // Outputs: Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

    echo("<br>");
    echo("<br>");

    //------------------------------------------

    $date1 = new DateTime('1981-11-03');
    $date2 = new DateTime('2013-09-04');

    $interval = $date1->diff($date2);

    echo "Difference: " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days";

    echo("<br>");
    echo("<br>");

    //------------------------------------------

    $dateString = '12-08-2004';

    // Create a DateTime object from the date string
    $date = DateTime::createFromFormat('d-m-Y', $dateString);

    // Convert the DateTime object back to a string in the yyyy-mm-dd format
    $formattedDate = $date->format('Y-m-d');

    echo $formattedDate; // Outputs: 2004-12-08
    echo("<br>");

    $dateString = '12-08-2004 ';

    // Create a DateTime object from the date and time string
    $dateTime = DateTime::createFromFormat('d-m-Y ', $dateString);

    // Convert the DateTime object back to a string in the yyyy-mm-dd H:i:s format
    $formattedDateTime = $dateTime->format('d-m-Y ');

    echo $formattedDateTime; // Outputs: 2004-12-08 12:34:56
    echo("<br>");




      

    echo('</main>');