<?php
session_start();
$_SESSION['error'] = null;


if ($_SERVER["REQUEST_METHOD"] != "POST" && empty($_POST)) 
    die("you are bad guys");

$email = isset($_POST["email"]) ? $_POST["email"] : null;
$pas = isset($_POST["pas"]) ? $_POST["pas"] : null;

$db_email = 'asd@1234';
$db_pas = '123456';


if (!empty($email) && !empty($pas)){
    if (strlen($email) > 5 && strlen($email) < 10) {
        if( $email != $db_email){
            $_SESSION['error'] = "incourect email or password";
            header('location : ./');
        } 
    } else {
        $_SESSION['error'] = " email should be between 5 and 10 chars";
        header('location : ./');
        exit();
    }
    if (strlen($email) > 5 && strlen($email) < 10) {
        if( $email == $db_email){
        if($pas != $db_pas){
            $_SESSION['error'] = " incourect email or password";
            header('location : ./');
            exit();
        } else {
            header("location : ./home.php");
        }
        } 
    } else {
        $_SESSION['error'] = " email should be between 5 and 10 chars";
        header('location : ./');
        exit();
    }
}
