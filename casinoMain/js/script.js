function oddBet(currentUsername) {
    // This works 
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        try{
            var response = JSON.parse(this.responseText);
            var generatedNum = response.generatedNum;
        }
        catch (e){
            console.error("Error parsing JSON: ", e);
            console.error("Response that caused the error: " + this.responseText);
        }
        
        // Get the number of coins text
        var curBet = document.getElementById("betInput").value;
        var curCredits = document.getElementById("curCreds").innerHTML;
        curBet = Math.abs(Number(curBet));

        console.log("i feel awful about this project");
        if (curBet > curCredits){
            return;
        }

        // Create a form to send all the data to php and append data to it
        // document.getElementById("chosenNum").textContent = generatedNum; // COMMENT 2/3 FOR DISPLAYER
        $("#betOdd").attr('disabled', true);
        $("#betEven").attr('disabled', true);
        timeToWait = moveEm(generatedNum);



// HERE I NEED TO SEND ALSO THE CURRENTLY LOGGED IN USERNAME TO betOdd.php so that i have a propper $dbNick

       
        
        setTimeout(
            function() {
                $("#betOdd").attr('disabled', false);
                $("#betEven").attr('disabled', false);

                var formData = new FormData();
                if (generatedNum % 2){
                    formData.append("odd", 2); // Odd (good)
                } else{
                    formData.append("odd", 1); // Even (bad)
                }   
                formData.append("curBet", curBet);
                formData.append("curCredits", curCredits);
                formData.append("currentUsername", currentUsername);

                

                var betRequest = new XMLHttpRequest();
                betRequest.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("curCreds").innerHTML = this.responseText;
                    }
                };
// This is where the betOdd.php get's data, so I'd say that's preety far gone
                betRequest.open("POST", "includes/betOdd.php", true);
                betRequest.send(formData);

            }, Number(timeToWait) * 1000);

            }
        };
    xmlhttp.open("GET", "includes/numGen.php", true);
    xmlhttp.send();
}



function evenBet(currentUsername) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
            try{
                var response = JSON.parse(this.responseText);
                var generatedNum = response.generatedNum;
            }
            catch (e){
                console.error("Error parsing JSON: ", e);
                console.error("Response that caused the error: " + this.responseText);
            }
            
        // Get the number of coins text
        var curBet = document.getElementById("betInput").value;
        var curCredits = document.getElementById("curCreds").innerHTML;
        curBet = Math.abs(Number(curBet));

        if (curBet > curCredits){
            return;
        }

        // Create a form to send all the data to php and append data to it
        // document.getElementById("chosenNum").textContent = generatedNum; // COMMENT 3/3 FOR DISPLAYER
        $("#betOdd").attr('disabled', true);
        $("#betEven").attr('disabled', true);
        timeToWait = moveEm(generatedNum);


        setTimeout(
            function() {
                $("#betOdd").attr('disabled', false);
                $("#betEven").attr('disabled', false);

                var formData = new FormData();
                if (generatedNum % 2){
                    formData.append("even", 1); // Even (good)
                } else{
                    formData.append("even", 2); // Odd (bad)
                }   
                formData.append("curBet", curBet);
                formData.append("curCredits", curCredits);
                formData.append("currentUsername", currentUsername);

                var betRequest = new XMLHttpRequest();
                betRequest.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("curCreds").innerHTML = this.responseText;
                    }
                };

                betRequest.open("POST", "includes/betEven.php", true);
                betRequest.send(formData);
            }, Number(timeToWait) * 1000);

        }
    };
    xmlhttp.open("GET", "includes/numGen.php", true);
    xmlhttp.send();
}


// I have to figure out If this is safe, I feel like this is the only file that might be vulnerable to attacks, bcs everything else is on the server
// I have to figure out how to prevent from betting with insufficient funds serverside

// Plan for today, add a login system and a button to add cash