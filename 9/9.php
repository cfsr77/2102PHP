<?php
    // $num1 = 1;
    // for($i=1;$i<=9;$i++){
    //     $num2 = $num1++;
    //     for($j=1;$j<$num3;$j++){
    //         $num4 = $num2 * $num3;
    //         echo $num4 = "$num1" . "*" . $num3 . "=" . $num4;
    //     }
    //     echo "<br>";
    // }
echo '<table>';
    for($i=1; $i<=9; $i++){
        echo '<tr>';
        for($j=1; $j<=$i; $j++){
            $num1 = $i*$j;                              
            echo '<td style ="border: 2px solid red">' . $j . '*' . $i . '=' ."$num1" . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    

