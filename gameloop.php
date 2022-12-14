<?php

    $n=5;
    for($i=1; $i<=$n; $i++)
    {
        for($j=$n; $j>=$i; $j--)
        {
            echo ' &nbsp;&nbsp; ';
        }
        for($j=1; $j<=$i; $j++)
        {
            echo ' * ';
        }
        for($j=2; $j<=$i; $j++)
        {
            echo ' * ';
        }
        echo '<br>';
    }
    

    // echo ('---------------------------------------<br><br>');


    // $n=10;
    // for($i=1; $i<=$n; $i++)
    // {
    //     for($j=$i; $j<=$n; $j++)
    //     {
    //         echo ' &nbsp;&nbsp; ';
    //     }
    //     for($j=1; $j<=$i; $j++)
    //     {
    //         echo ' * ';
    //     }
    //     echo '<br>';
    // }
    // for($i=1; $i<=$n; $i++)
    // {
    //     for($j=1; $j<=$i; $j++)
    //     {
    //         echo ' &nbsp;&nbsp; ';
    //     }
    //     for($j=$i; $j<=$n; $j++)
    //     {
    //         echo ' &nbsp;&nbsp; ';
    //     }
    //     for($j=$n; $j>=$i; $j--)
    //     {
    //         echo ' * ';
    //     }
    //     echo '<br>';
    // }
    
