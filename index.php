<!-- Life really is an rpg game, and what I want to do in it is conquer every well knows mtb freeride spot in poland, learn few tricks along the way, especially a tabletp[] and a good whip -->
    <!-- Take part in dzbk jam -->
    <!-- Make friends along the way and go to these places with them and with my future wife -->
    <!-- Master coding by actually doing shit -->
    <!-- Mastering coding is the same as mastering freeride, just be obsessed and consistent with it, and get actual hands on expirience instead of just watching tutorials -->
        <!-- Honestly I feel like the video was right, It's important to both mix the tutorials with doing stuff, but after finishing a series of tutorials you should build a big project to show off the stuff you've learnt -->
        <!-- Basically the plan is, reasearch a project, find out what technologies you need, in case you don't know some of them. Watch the needed tutorials -->
        <!-- Once you're done with them, put the skills to use and finish the project -->
        <!-- For now I feel like I should finish the ajax tutorial series and once I'm done then continue on with this project -->
            <!-- This casino project should be very nice, It should include a login, prefferable on the same page but there was something else I needed to learn to do that as far as I can remember
            also It needs a database from which you get you're current credit and stuff -->
            <!-- A nice animation for the generating numbers, it can just be numbers swapping in place but it needs to be animated -->
                <!-- And the final number needs to be something that is rolled by the server and is known before It's shown, It can't be just rand with js, It needs to be done serverside -->
                <!-- And do you're best, both in mtb as well as in social life, with your relationship and with your work -->
                <!-- Sleepless night's and shit, keep peep in mind and the amount of work he's put in to get where he was -->
                <!-- And remember that It'll be painful but we're all simultaneously on a journey working at the same time building up ourselves -->
                    <!-- Love Joui <3 -->
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
    <link rel="stylesheet" href="css/style.css">
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
            
            <!-- <h1 class="mt-5">The chosen number is: <span id="chosenNum" name="chosenNum"></span></h1> --> <!-- COMMENT 1/3 FOR DISPLAYER -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
    <script src="scroll.js"></script>
</body>
</html>