<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    $tussenPrijs = ($korting / 100) * $koopPrijs;
    $nieuwePrijs = $koopPrijs - $tussenPrijs;
    return $nieuwePrijs;
    
}
function toonAntwoord(){
    echo '<h1>' . geefTienProcent() . '</h1>';
}
toonAntwoord()
?>
