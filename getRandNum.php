<?php
// getRandomNumber.php
header('Content-Type: application/json');

// Generate a random number between 200 and 2000
$randomNumber = rand(200, 2000);

// Return the random number as a JSON response
echo json_encode(['randomNumber' => $randomNumber]);
?>