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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <title>Document</title>
    <script>
    function oddBet() {
        // This works 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            var generatedNum = response.generatedNum;
            
        // Get the number of coins text
        var curBet = document.getElementById("betInput").value;
        var curCredits = document.getElementById("curCreds").innerHTML;
        // Create a form to send all the data to php and append data to it
        console.log(generatedNum);
        document.getElementById("chosenNum").textContent = generatedNum;
        var formData = new FormData();
        if (generatedNum % 2){
            formData.append("odd", 2); // Odd (good)
        } else{
            formData.append("odd", 1); // Even (bad)
        }   
        formData.append("curBet", curBet);
        formData.append("curCredits", curCredits);


        // Now for the NumGen we open another ajax request
        var betRequest = new XMLHttpRequest();
        betRequest.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("curCreds").innerHTML = this.responseText;
            }
        };
 

        // Open a request for betOdd
            betRequest.open("POST", "includes/betOdd.php", true);
            betRequest.send(formData);
            }
        };
        xmlhttp.open("GET", "includes/numGen.php", true);
        xmlhttp.send();
    }

</script>
</head>
<body>
    <h1>The grand casino</h1>
    <h2>You currently have: <a id="curCreds"><?php echo $currentCredits;?></a> credits</h2>
    <div id="amountDiv">
        <input type="text" name="betInput" id="betInput" placeholder="Enter bet Amount">
    </div>
    <div id="betDiv">
        <button id="betOdd" name="betOdd" onclick="oddBet()">Bet on odd</button>
        <button id="betEven" name="betEven">Bet on even</button>
    </div>
        <h1>The chosen number is: <a id="chosenNum" name="chosenNum"></a></h1>
</body>
</html>