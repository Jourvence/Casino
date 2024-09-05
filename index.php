<?php
require_once 'includes/numGen.php';
require_once 'includes/creditCounter.php'; 
require_once 'includes/betOdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Grand Casino</title>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Js box load -->
    <script src="boxLoader.js"></script>
    <!-- lightMode -->
    <script src="lightMode.js"></script>
    <!-- CSS -->
    <link id="cssTheme" rel="stylesheet" href="css/style1.css">
</head>

<body onload="loadBoxes()">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">The Grand Casino</a>
        <button id="lightModeButton" onclick="lightMode()"></button>
    </nav>

    <!-- Main Content -->
    <div class="container text-center">
        <h1 class="mt-5">The Grand Casino Inc.</h1>
        <div class="mainContainer">
            <!-- Boxes -->
            <div class="rouletteBoxesContainer" id="test7">

            </div>
            <div class="RouletteLine"></div> 
        </div>
        <h2 class="mt-3">You currently have: <span id="curCreds"><?php echo $currentCredits; ?></span> credits</h2>


        <div id="amountDiv" class="mt-4">
            <input type="text" class="form-control text-center" name="betInput" id="betInput" placeholder="Enter bet Amount">
        </div>

        <div id="betDiv" class="mt-4">
            <button id="betOdd" name="betOdd" class="btn btn-primary mr-2" onclick="oddBet()">Bet on odd</button>
            <button id="betEven" name="betEven" class="btn btn-secondary ml-2" onclick="evenBet()">Bet on even</button>
            
            <h1 class="mt-5">The chosen number is: <span id="chosenNum" name="chosenNum"></span></h1> <!-- COMMENT 1/3 FOR DISPLAYER -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
    <script src="scroll.js"></script>
</body>
</html>