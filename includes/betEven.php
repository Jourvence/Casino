<?php 
$even = isset($_POST["even"]) ? (int)$_POST["even"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;

if ($even == 1){
    $changed = $curCredits - ($curBet * 1.2);
    echo $changed;
}
else if ($even == 2){
    $changed = $curCredits + $curBet;
    echo $changed;
}
// The if doesn't read any of the $_request[]'s, It just sees them as nothing
// From my current test's I feel like after clicking the odd button it doesn'y even open the bet.php file
// if ($odd == 1){
//     global $currentCredits;
//     echo $currentCredits --;
// }