<?php
    $prod_besteld = 12;

    if($prod_besteld < 10) {
        echo $prijs = 1.50;
    } elseif($prod_besteld < 20) {
       echo $prijs = 1.25;
    } else {
        echo $prijs = 1.00;
    }
    ?>