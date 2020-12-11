<?php
$t = date("H");
$test1 = 10;
$test2 = 6;


if ($test1=$test2){
    echo "ongelijk";
}

if ($test1===$test2)
{echo ",identiek";
}
if ($test1 >= $test2)
{echo ",test1 is groter dan test2";
}
if ($test1>=$test2)
{echo ",test1 is groter of gelijk aan test2";
}
?>