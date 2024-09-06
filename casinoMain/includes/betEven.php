<?php 
$even = isset($_POST["even"]) ? (int)$_POST["even"] : 0;
$curBet = isset($_POST["curBet"]) ? (int)$_POST["curBet"] : 0;
$curCredits = isset($_POST["curCredits"]) ? (int)$_POST["curCredits"] : 0;
$currentUsername = $_POST["currentUsername"];

$changed = 0;

if ($even == 1){
    $changed = $curCredits - ($curBet);
    echo $changed;
}
else if ($even == 2){
    $changed = $curCredits + $curBet;
    echo $changed;
}


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
   //  This is empty preetyMuch
    $stmt->bindParam(':username', $currentUsername);
    $stmt->execute();

    // echo " aa $currentUsername aa funds updated successfully";
} catch (PDOException $e) {
    echo "Error updating record: " . $e->getMessage();
}

// Close the connection
$pdo = null;