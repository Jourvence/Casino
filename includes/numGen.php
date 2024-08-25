<?php
$chosen = 0;
function numGenerate() {
    $chosen = rand(1, 20);
    return $chosen;
    // Have the number chosen 10 times and update it 10 times, have a little animation of changing numbers going on. and only the final number counts
}
json_encode(["generatedNum" => numGenerate()]);