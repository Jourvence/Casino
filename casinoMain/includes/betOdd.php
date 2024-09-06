<?php 
$odd = isset($_POST["odd"]) ? (int)$_POST["odd"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;
$currentUsername = $_POST["currentUsername"];

$changed = 0;

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
     $stmt->bindParam(':funds', $changed);
    // This is empty preetyMuch
     $stmt->bindParam(':username', $currentUsername);
     $stmt->execute();

    // echo " aa $currentUsername aa funds updated successfully";
 } catch (PDOException $e) {
     echo "Error updating record: " . $e->getMessage();
 }

 // Close the connection
 $pdo = null;

//  I need to get the currently logged in username in here from script's.js AJAX
// im missing $dbNick