<?php


declare(strict_types=1);

function output_username()
{
    if (isset($_SESSION["korisnik_id"])) {
        echo $_SESSION["korisnik_username"];
    }


}

function provjera_login_error() 
{
    if (isset($_SESSION["login_error"])) {
        $error = $_SESSION["login_error"];

        echo "<br>";

        foreach ($error as $errors) {
            
            echo '<h2 style="text-align: center;  color:aquamarine;" >' . $errors . '</h2>';
        }

        unset($_SESSION['login_error']);
    }
    else if (isset($_GET['login']) && $_GET['login'] === "uspjeh") {
        header("Location: ../Zavrsni%20rad/Stranica.php");        
    } 
    

}