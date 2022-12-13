<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');

    echo('<main>');
    $my_array = ['ahmad' ,'muhammed' ,'ali' ,["5"=> 'maher', "4"=> 'samer', ['noor', 'samer' ,'mona']]];
    echo('<pre>');
    print_r($my_array);
    echo('</pre>');

    print_r($my_array[3][6][2]);
    
    $my_value = $my_array[3][6][2];

    echo("<P>".$my_value."<P>");

    echo('<hr>');
    echo ('<h1>TASK</h1>');

    $first_array = ['WHITE', 'GREEN', 'RED'];

    echo('The memory of that scene for me is like a frame of film forever frozen at that moment: the ' .$first_array[2]. ' carpet, 
        the ' .$first_array[1]. ' lawn, the ' .$first_array[0]. ' house, the leaden sky. The new president and his first lady. - Richard M. Nixon
    ');

    echo('<ul>');
    echo('<li>'.$first_array[0].'</li>');
    echo('<li>'.$first_array[1].'</li>');
    echo('<li>'.$first_array[2].'</li>');
    echo('</ul>');


    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
                    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
                    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam"
                    , "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

    foreach($cities as $x => $val) {
        echo "The capital of $x is $val<br>";
    }
    echo('<br>');


    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo current($color);

    $sec_array = array(1 ,2 ,3 ,4 ,5);
    $inserted = '$';
    array_splice( $sec_array, 3, 0, $inserted ); 
    foreach ($sec_array as $x) 
    {echo "$x ";};
    echo('<br>');

    
    $fruits = array("3" =>"lemon", "2" =>"orange", "4" =>"banana", "1" =>"apple"); 
    echo('<pre>');
    print_r($fruits);
    echo('</pre>');
    ksort($fruits);
    foreach($fruits as $y=>$y_value)
    { echo "Age of ".$y." is : ".$y_value."<br>";};
    echo('<br>');
    $tempre = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    // $avreg = array_sum($tempre) / count($tempre);
    $sum = array_sum($tempre);
    $count =  count($tempre);
    echo $sum / $count;


    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    echo('<pre>');
    print_r(array_merge($array1,$array2));
    echo('</pre>');


    
    $colors = array("red","blue","white","yellow");
    
    // flip array key => value
    $colors = array_flip($colors);
    
    // change case of new keys to upper
    $colors = array_change_key_case($colors, CASE_UPPER);
    
    // reverse the flip process to  and regain strings as value
    $colors = array_flip($colors);
    
    // print array after conversion of string
    echo('<pre>');
    print_r($colors);
    echo('</pre>');



    $colors = array("RED","BLUE","WHITE","YELLOW");
    
    // flip array key => value
    $colors = array_flip($colors);
    
    // change case of new keys to upper
    $colors = array_change_key_case($colors, CASE_LOWER);
    
    // reverse the flip process to  and regain strings as value
    $colors = array_flip($colors);
    
    // print array after conversion of string
    echo('<pre>');
    print_r($colors);
    echo('</pre>');


    echo implode(",",range(200,250,4))."<br>";

    $words = array("abcd","abc","de","hjjj","g","wer");
    $new_array = array_map('strlen', $words);
    echo "The shortest array length is" .min($new_array). "<br>The longest array length is" .max($new_array).".<br>";


    $n=range(11,20);
    shuffle($n);
    for ($x=0; $x< 10; $x++)
    {
    echo $n[$x].' ';
    }
    echo "<br>";

    function min_values_not_zero(Array $values) 
    {
    return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");


    
    echo('</main>');