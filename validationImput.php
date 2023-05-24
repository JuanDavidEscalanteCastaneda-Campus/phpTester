<?php
    function diez($e){
        if($e<10){
            echo "$e si es menor que 10";
        }elseif($e==10){
            echo "$e es igual que 10";
        }else{
            echo "$e si es mayor que 10";
        }
    };

    $val = $num%2;
    if($val===0){
        echo "este valor ($num) es par<br> ";
        diez($num);
    }elseif($val===1){
        echo "este valor ($num) es impar<br> ";
        diez($num);
    }
?>