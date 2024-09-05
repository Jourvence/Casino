<?php 
$odd = isset($_POST["odd"]) ? (int)$_POST["odd"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;

if ($curBet > $curCredits){
    return "insufficient";
}

if ($odd == 1){
    $changed = $curCredits - ($curBet);
    echo $changed;
}
else if ($odd == 2){
    $changed = $curCredits + $curBet;
    echo $changed;
}
