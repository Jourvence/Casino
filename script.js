function oddBet() {
    // This works 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        try{
            var response = JSON.parse(this.responseText);
            var generatedNum = response.generatedNum;
            console.log("Parsed generatedNum: " + generatedNum);
        }
        catch (e){
            console.error("Error parsing JSON: ", e);
            console.error("Response that caused the error: " + this.responseText);
        }
        
    // Get the number of coins text
    var curBet = document.getElementById("betInput").value;
    var curCredits = document.getElementById("curCreds").innerHTML;
    curBet = Math.abs(Number(curBet));

    // Create a form to send all the data to php and append data to it
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


function evenBet() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        try{
            var response = JSON.parse(this.responseText);
            var generatedNum = response.generatedNum;
            console.log("Parsed generatedNum: " + generatedNum);
        }
        catch (e){
            console.error("Error parsing JSON: ", e);
            console.error("Response that caused the error: " + this.responseText);
        }
        
    // Get the number of coins text
    var curBet = document.getElementById("betInput").value;
    var curCredits = document.getElementById("curCreds").innerHTML;
    curBet = Math.abs(Number(curBet));

    // Create a form to send all the data to php and append data to it
    document.getElementById("chosenNum").textContent = generatedNum;
    var formData = new FormData();
    if (generatedNum % 2){
        formData.append("even", 1); // Even (good)
    } else{
        formData.append("even", 2); // Odd (bad)
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
        betRequest.open("POST", "includes/betEven.php", true);
        betRequest.send(formData);
        }
    };
    xmlhttp.open("GET", "includes/numGen.php", true);
    xmlhttp.send();
}