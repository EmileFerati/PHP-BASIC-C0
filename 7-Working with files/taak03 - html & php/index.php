<?php  
    require 'database.php';

    $leeftijd = 18;
?>
<html>
<head>
</head>
<body>
<script>
leeftijdchecker=prompt("wat is je leeftijd?")
 bezoeker={
  
   leeftijdchecker: leeftijdchecker,
}
console.log(bezoeker)
document.querySelector("#testleeftijdchecker").innerHTML = bezoeker.leeftijdchecker

</script>


    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="leeftijdChecker">
    <?php
            if($leeftijd < 19 ){
                echo "<h6>Jij mag deze pagina bekijken</h6>";
            }
            ?>
            </div>
    
    <div id="isMeerderJarig">
    <?php
            if($leeftijd > 16 ){
                echo "<h5>Je bent te jong om deze pagina te bekijken</h5>";
            }
            ?>
            </div>
       
   

</body>
</html>
