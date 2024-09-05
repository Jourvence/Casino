<?php 

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$odd = isset($_POST["odd"]) ? (int)$_POST["odd"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;


if ($odd == 1){
    $changed = $curCredits - ($curBet);
    echo $changed;
}
else if ($odd == 2){
    $changed = $curCredits + $curBet;
    echo $changed;
}

