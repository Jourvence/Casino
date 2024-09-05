<?php 
$even = isset($_POST["even"]) ? (int)$_POST["even"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;

if ($curBet > $curCredits){
    return "insufficient";
}

if ($even == 1){
    $changed = $curCredits - ($curBet);
    echo $changed;
}
else if ($even == 2){
    $changed = $curCredits + $curBet;
    echo $changed;
}
