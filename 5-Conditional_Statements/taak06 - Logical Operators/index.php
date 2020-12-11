<?php
    $var1 = 3;

    if($var1 < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "<li> Een vergelijking met &&";
    }
    
    ?>
    <?php
    $var1 = 3;

    if($var1 < 10 || $var1 > 5) {
        echo "<li> Een vergelijking met |";
    } else {
        echo "<li> Een vergelijking met ||";
    }
    
    ?>
    <?php
    $var1 = 3;

    if($var1 < 10 xor $var1 > 5) {
        echo "<li> Een vergelijking met xor";
    } else {
        echo "<li> Een vergelijking met xor";
    }
    
    ?>
    <?php
    $var1 = 3;

    if($var1 < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "<li> Een vergelijking met !";
    }
    
    ?>