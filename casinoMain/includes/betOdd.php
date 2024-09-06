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

// I think this is the file where i update my db

// Database connection (replace with your actual database credentials)
 $host = 'localhost';
 $dbname = 'roulettedatabase';
 $dbusername = 'root';
 $dbpassword = '';

 try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
     die("Connection failed: " . $e->getMessage());
 }

 // SQL query to update the database
 $sql = "UPDATE users SET funds = :funds WHERE username = :username";

 try {
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(':speed', $speed);
    //  This is empty preetyMuch
     $stmt->bindParam(':username', $dbNick);
     $stmt->execute();

     echo "Record updated successfully";
 } catch (PDOException $e) {
     echo "Error updating record: " . $e->getMessage();
 }

 // Close the connection
 $pdo = null;

//  I need to get the currently logged in username in here from script's.js AJAX
// im missing $dbNick