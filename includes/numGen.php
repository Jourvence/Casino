<?php
function numGenerate() {
    $chosen = rand(1, 20);
    return $chosen;
}

function validateGeneratedNum($num) {
    return abs($num);
}

// Generate a number
$generatedNum = numGenerate();

// Prepare the response with the generated number
$response = ["generatedNum" => $generatedNum];

// Validate if we got a number from POST (for when validating submitted numbers)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedNum = isset($_POST['generatedNum']) ? (int) $_POST['generatedNum'] : 0;
    $validatedNum = validateGeneratedNum($submittedNum);
    // You can add validatedNum to the response if needed
    $response['validatedNum'] = $validatedNum;
}

// Output the JSON response
echo json_encode($response);
?>