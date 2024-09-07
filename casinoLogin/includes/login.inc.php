<?php
require_once "dbh.inc.php";
require_once "login_contr.inc.php";
require_once "login_view.inc.php";
require_once "login_model.inc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $errors = [];

    if (empty($username) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {

        if (is_input_empty($username, $password)){
            $errors["empty_input"] = "Fill in all the fields!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        if (!is_username_wrong($result) && is_password_wrong($password, $result["pwd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_login"] = $errors;

            header("Location: ../index.php");
            die(); 
        }

        // This will create an entirely new id
        // Were creating a new SESSION id and we add (append) the USER id to it, so that we know that the user is logged in 
        $_SESSION['username'] = $username;
        header("Location: ../index.php?login=success&userName=$username");
        // BASICALLY THIS REDIRECTS BACK TO THE MAIN LOGIN PAGE AKA index.php, then once It's in index php with the data in the url, it goes to login_view.inc.php which redirects to casine
        

        exit();
    }
} else{
    header("Location: ../index.php");
    exit();
}

