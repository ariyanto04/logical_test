<?php
    function loop(int $i){
        for ($n = 1; $n <= $i; $n++){
            if (($n % 3 == 0) && ($n % 5 == 0)){
                echo "FooBar" . "\n";
            }
            elseif ($n % 3 == 0){
                echo "Foo" . "\n";
            }
            elseif ($n % 5 == 0){
                echo "Bar" . "\n";
            }
            else{
                echo $n . "\n";
            }
        }
    }
    echo loop(50);
?>